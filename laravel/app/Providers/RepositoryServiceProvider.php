<?php

namespace App\Providers;

use App\Repositories\EnvironmentRepository;
use App\Repositories\EnvironmentRepositoryInterface;
use App\Repositories\FilePsiRepository;
use App\Repositories\FileStationRepository;
use App\Repositories\LogRepository;
use App\Repositories\LogRepositoryInterface;
use App\Repositories\PsiRepository;
use App\Repositories\PsiRepositoryInterface;
use App\Repositories\StationRepository;
use App\Repositories\StationRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(EnvironmentRepositoryInterface::class, EnvironmentRepository::class);
        $this->app->singleton(LogRepositoryInterface::class, LogRepository::class);

        switch (config('app.data_source')) {
            case 'api':
                $this->app->singleton(PsiRepositoryInterface::class, PsiRepository::class);
                $this->app->singleton(StationRepositoryInterface::class, StationRepository::class);
                break;
            case 'file':
                $this->app->singleton(PsiRepositoryInterface::class, FilePsiRepository::class);
                $this->app->singleton(StationRepositoryInterface::class, FileStationRepository::class);
                break;
            default:
                throw new \RuntimeException("Unknown data source");
        }

    }
}
