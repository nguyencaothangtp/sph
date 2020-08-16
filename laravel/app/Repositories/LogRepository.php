<?php


namespace App\Repositories;

use App\Log;

class LogRepository implements LogRepositoryInterface
{
    public function getLatestSuccess($infoOf) {
        return Log::where('info_of', $infoOf)
            ->where('is_success', true)
            ->latest('created_at')
            ->first();
    }
}
