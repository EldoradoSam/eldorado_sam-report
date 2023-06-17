<?php

namespace rbs\report;

use Illuminate\Support\ServiceProvider;

class RbsReportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->make('rbs\report\RbsReportController');
        $this->loadViewsFrom(__DIR__.'/views','report');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        include __DIR__.'/routes.php';
    }
}
