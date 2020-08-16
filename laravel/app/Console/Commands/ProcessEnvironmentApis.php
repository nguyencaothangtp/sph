<?php

namespace App\Console\Commands;

use App\Jobs\ProcessAirTemperatureApi;
use App\Jobs\ProcessPsiApi;
use Illuminate\Console\Command;

class ProcessEnvironmentApis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'environment_apis:call';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Call 3rd PSI and Weather API and save the response to database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ProcessPsiApi::dispatch();
        ProcessAirTemperatureApi::dispatch();

        return 0;
    }
}
