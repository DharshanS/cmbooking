<?php

namespace App\Http\Controllers;

use App\CMBairs\airBeans\AirSearch;
use App\CMBairs\airService\AirServiceImpl;

use App\CMBairs\core\CoreServiceImp;
use App\CMBairs\travelportMessages\TravelPortRequestImp;
use App\Http\Controllers\Auth\LoginController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;


class AirController extends Controller
{
//use Log;


private $airRequest;
private $core;

public function __construct(AirServiceImpl $airRequest,CoreServiceImp $core)
{
    $this->airRequest=$airRequest;
    $this->core=$core;


}


    public function airSearch(Request $search){
        $airSearch=new AirSearch();
        $mode=$search->get('mode');
        $cities=$search->get('airport');
        $depDate=$search->get('date_from');
        $departure=$cities[0];
        $arrival=$cities[1];
        $adult=$search->get('adult');
        $child=$search->get('child');
        $infant=$search->get('infant');

        $comingBack="";
        if($mode=='round')
        {
            $comingBack =$search->get('date_to');
        }

        Log::info("from : ".$cities[0]);
        Log::info("where : ".$cities[1]);
        Log::info("date form : ".$depDate);
        Log::info("mode : ".$mode);
        Log::info("adult : ".$search->adult);
        Log::info("child : ".$child);
        Log::info("infant : ".$infant);


;

        $airSearch->departureCity[]=$departure;
        $airSearch->departureDate[]='2017-12-27';
        $airSearch->arrivalCity[]='BKK';
        $airSearch->arrivalDate[]='2017-12-31';
        $airSearch->mode='oneway';
        $airSearch->adult=1;
        $airSearch->child=1;
        $airSearch->infant=1;
       $airList= $this->airRequest->lowFareSearch($airSearch);
        Log::info('Total return flights --->'.count($airList));

       // Log::info(print_r($airList,true));


        return view('airviews.round',['airList' => $airList]);

    }

    public function priceFlight(){


        return view('airviews.book');
    }

public function index(){

    return view('flight.index');

}




    public function loadCities(Request $query){

        Log::info("request---->".$query->input('query'));

        $cities=$this->core->getCitiesFromDb($query->input('query'));
       //Log::info("cities---->".print_r($cities,true));

          return \GuzzleHttp\json_encode($cities);


    }



}
