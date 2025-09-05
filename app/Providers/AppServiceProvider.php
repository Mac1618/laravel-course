<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // boot: triggered after all the project dependencies are fully loaded
    public function boot(): void
    {
        // prevent to use lazy loading causing many queries
        Model::preventLazyLoading(true);
    }
}
