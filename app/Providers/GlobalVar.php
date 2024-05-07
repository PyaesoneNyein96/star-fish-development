<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GlobalVar extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('domain', function () {
            // return "https://star-fish.myanmargateway.net";
            // return "https://star-fish-development.myanmargateway.net/";
            return "http://localhost:8000";
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
