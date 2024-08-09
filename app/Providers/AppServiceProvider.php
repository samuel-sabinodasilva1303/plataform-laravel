<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// ACTIVE ON PRODUCTION
// use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // ACTIVE ON PRODUCTION
        //Schema::defaultStringLength(191);
    }
}
