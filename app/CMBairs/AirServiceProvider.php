<?php
/**
 * Created by PhpStorm.
 * User: dharshansithamparam
 * Date: 12/2/17
 * Time: 10:57 AM
 */

namespace app\CMBairs;

use Illuminate\Support\ServiceProvider;

class AirServiceProvider extends ServiceProvider
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

        $this->app->bind('app\CMBairs\airService\AirService', 'AirServiceImpl');
        $this->app->bind('app\CMBairs\core\CoreServices', 'CoreServiceImp');

        // $this->app->bind('app\CMBairs\airXmlMessages\AirRequest', 'LowFareSearchReq');
        $this->app->bind('app\CMBairs\travelportMessages\TravelPortRequest', 'TravelPortRequestImp');



    }

}