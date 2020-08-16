<?php

namespace App\Repositories;


use App\Psi;

class PsiRepository implements PsiRepositoryInterface
{
    protected $logRepository;

    public function __construct(LogRepositoryInterface $logRepository)
    {
        $this->logRepository = $logRepository;
    }

    /**
     * Return latest Pollutant Standards Index information
     *
     * @return mixed
     */
    public function getLatest() {
        $log = $this->logRepository->getLatestSuccess('psi');

        return Psi::where('log_id', $log->id)->first();
    }

}
