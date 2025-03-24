<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\CodeRepository;
use App\Services\GithubService;

class CodeRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(CodeRepository::class, function($app) {
            // Create an instance of the code repository.
            // It can be Bitbucket or any other platform.
            return new GithubService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
