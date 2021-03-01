<?php

namespace TakiElias\QuickCalculator;

use Illuminate\Support\ServiceProvider;

class QuickCalculatorServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'takielias');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register package services.
     *
     * @return void
     */
    public function register(): void
    {
        // Register the service the package provides.
        $this->app->singleton('quickcalculator', function ($app) {
            return new QuickCalculator;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['quickcalculator'];
    }
}
