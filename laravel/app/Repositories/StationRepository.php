<?php


namespace App\Repositories;

use App\Station;

class StationRepository implements StationRepositoryInterface
{
    public function getWithLatestAirTemp()
    {
        return Station::with('latestAirTemps')->get();
    }
}
