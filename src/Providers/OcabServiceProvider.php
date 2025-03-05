<?php

namespace TronderData\Ocab\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class OcabServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap tjenesten.
     */
    public function boot()
    {
        // Last inn migrasjoner
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        // Last inn ruter
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');

        // Last inn view-filer
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'ocab');
    }

    /**
     * Register tjenesten.
     */
    public function register()
    {
        //
    }
}