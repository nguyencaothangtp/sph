<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Storage;

class FileStationRepository implements StationRepositoryInterface
{
    const FILE_NAME = '16082020.json';

    /**
     * Return latest Station air temperature information
     *
     * @return mixed
     */
    public function getWithLatestAirTemp() {
        $file = Storage::get(self::FILE_NAME);
        $content = json_decode($file);

        return $content->stations;
    }
}
