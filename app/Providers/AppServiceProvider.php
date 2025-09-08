<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
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

        // custom css framework to use
        // Paginator::useBootstrapFive(); // use boostrap
        // Paginator::defaultView('vendor.pagination.custom'); // custom pagination view for all paginators
    }
}
