<?php

namespace App\Jobs;

use App\Log;
use App\Psi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class ProcessPsiApi implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    const PSI_API_URL = 'https://api.data.gov.sg/v1/environment/psi';

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

        $response = Http::get(self::PSI_API_URL);
        if (!$response->successful()) {
            Log::create([
                'is_sucess' => false,
                'info_of' => 'psi',
                'response' => $response->body()
            ]);

            return;
        }

        if ($response['items'] && count($response['items']) > 0) {
            $items = $response['items'][0]; // get the latest psi info

            // Save log to the database only if the actual_time is not saved before
            $log = Log::firstOrCreate(
                [
                    'info_of' => 'psi',
                    'actual_time' => date('Y-m-d H:i:s', strtotime($items['update_timestamp']))
                ],
                [
                    'is_success' => true,
                    'response' => $response->body()
                ]
            );

            // Save to psi table only if the psi info was not there
            $psi = $items['readings'] ? $items['readings'] : [];
            foreach ($psi as $index => $value) {
                Psi::firstOrCreate(
                    [
                        'index' => $index,
                        'log_id' => $log->id
                    ],
                    [
                        'value' => json_encode($value)
                    ]
                );
            }
        }
    }
}
