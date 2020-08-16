<?php

namespace App\Providers;

use App\Repositories\EnvironmentRepository;
use App\Repositories\EnvironmentRepositoryInterface;
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
        $this->app->singleton(StationRepositoryInterface::class, StationRepository::class);
        $this->app->singleton(LogRepositoryInterface::class, LogRepository::class);

        $this->app->singleton(PsiRepositoryInterface::class, function () {
            switch (config('app.data_source')) {
                case 'api':
                    return new PsiRepository(new LogRepository());
                default:
                    throw new \RuntimeException("Unknown data source");
            }
        });
    }
}
