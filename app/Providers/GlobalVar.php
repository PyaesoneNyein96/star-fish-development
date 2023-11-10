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
            return "https://star-fish.myanmargateway.net";
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
