<?php

namespace App\Http\Controllers;

use App\Repositories\EnvironmentRepositoryInterface;
use Illuminate\Http\Request;

class Environment extends Controller
{
    protected $environmentRepository;

    public function __construct(EnvironmentRepositoryInterface $environmentRepository)
    {
        $this->environmentRepository = $environmentRepository;
    }

    public function __invoke(Request $request)
    {
        return $this->environmentRepository->getLatest();
    }
}
