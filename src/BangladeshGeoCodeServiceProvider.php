<?php

namespace Exceptio\BangladeshGeoCode;

use Illuminate\Support\ServiceProvider;

class BangladeshGeoCodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        $this->publishes([
            __DIR__ . '/Database/migrations' => $this->app->databasePath() . '/migrations'
        ], 'exceptio-bd-geocode-migrations');      
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
