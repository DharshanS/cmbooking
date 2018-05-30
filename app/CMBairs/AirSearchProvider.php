<?php

namespace app\CMBairs;

use Illuminate\Support\ServiceProvider;

class AirSearchProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
       // $this->app->bind('app\CMBairs\travelportMessages\TravelPortRequest', 'TravelPortRequestImp');
    }
}
