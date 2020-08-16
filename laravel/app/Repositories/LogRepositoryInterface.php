<?php

namespace App\Repositories;

interface LogRepositoryInterface
{
    public function getLatestSuccess($infoOf);
}
