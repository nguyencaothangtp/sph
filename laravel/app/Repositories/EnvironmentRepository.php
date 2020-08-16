<?php


namespace App\Repositories;


class EnvironmentRepository implements EnvironmentRepositoryInterface
{
    protected $psiRepository;
    protected $stationRepository;

    public function __construct(PsiRepositoryInterface $psiRepository, StationRepositoryInterface $stationRepository)
    {
        $this->psiRepository = $psiRepository;
        $this->stationRepository = $stationRepository;
    }

    public function getLatest()
    {
        return [
            'psi' => $this->psiRepository->getLatest(),
            'stations' => $this->stationRepository->getWithLatestAirTemp()
        ];
    }

}
