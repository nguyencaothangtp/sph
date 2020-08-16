<?php

namespace App\Jobs;

use App\AirTemp;
use App\Log;
use App\Station;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class ProcessAirTemperatureApi implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    const AIR_TEMP_API_URL = 'https://api.data.gov.sg/v1/environment/air-temperature';

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Only call api if data source was set to API in configuration
        if (config('app.data_source') != 'api') {
            return;
        }

        $response = Http::get(self::AIR_TEMP_API_URL);

        // Save unsuccessful request to log table
        if (!$response->successful()) {
            Log::create([
                'is_sucess' => false,
                'info_of' => 'air_temperature',
                'response' => $response->body()
            ]);

            return;
        }

        if ($response['items'] && count($response['items']) > 0) {
            $stations = $response['metadata']['stations'];
            $items = $response['items'][0]; // get the latest air temps info

            // Insert / Update station
            foreach ($stations as $station) {
                Station::updateOrCreate(
                    [
                        'id' => $station['id']
                    ],
                    [
                        'device_id' => $station['device_id'],
                        'name' => $station['name'],
                        'latitude' => $station['location']['latitude'],
                        'longitude' => $station['location']['longitude']
                    ]);
            }

            // Save log to the database only if the actual_time is not saved before
            $log = Log::firstOrCreate(
                [
                    'info_of' => 'air_temperature',
                    'actual_time' => date('Y-m-d H:i:s', strtotime($items['timestamp']))
                ],
                [
                    'is_success' => true,
                    'response' => $response->body()
                ]
            );

            // Save to air temps table only if the table info was not there
            $airTemps = $items['readings'] ? $items['readings'] : [];
            foreach ($airTemps as $value) {
                AirTemp::firstOrCreate(
                    [
                        'station_id' => $value['station_id'],
                        'log_id' => $log->id
                    ],
                    [
                        'value' => json_encode($value['value'])
                    ]
                );
            }
        }
    }
}
