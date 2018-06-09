<?php
/**
 * Created by PhpStorm.
 * User: dharshansithamparam
 * Date: 12/1/17
 * Time: 8:12 PM
 */

namespace App\CMBairs\airService;

use App\CMBairs\airBeans\Air;
use App\CMBairs\airBeans\AirSearch;
use App\CMBairs\airBeans\Response;
use App\CMBairs\core\CoreServiceImp;
use App\CMBairs\travelportMessages\TravelPortRequestImp;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;
ini_set('max_execution_time', 300);

class AirServiceImpl implements AirService
{
    private $travelPort;
    private $core;
    private $lowFareResponse;

    function __construct(TravelPortRequestImp $travelPort, CoreServiceImp $coreServices)
    {
        $this->travelPort = $travelPort;
        $this->core = $coreServices;
    }

    /**
     * @param AirSearch $airSearch
     * @return Response|mixed|\SimpleXMLElement
     * check the response and set into global variable
     */
    public function lowFareSearch(AirSearch $airSearch)
    {


        $fileName ='oneway.xml';// 'oneway.xml';
        $response = $this->core->sendToTrvPort($this->travelPort->getOneWaySearchRequest($airSearch), $fileName);
       // Log::info(print_r($response,true));

        if (isset($response['SOAPBody']['airLowFareSearchRsp'])) {
            $this->lowFareResponse = $response['SOAPBody']['airLowFareSearchRsp'];

        } else {

            $response = new Response();
            $response->message = config('cmb.error.airsearch');
            $response->code = config('cmb.error.airsearchcode');
            return $response;
        };

        return $this->lowFareSearchProcessOneWay();
       // return $this->lowFareSearchRoundTrip();
    }

    /**
     * loop through  air price point list and pick the relevant air segment
     */

    private function lowFareSearchProcessOneWay()
    {
        $airAirPricePointList = $this->lowFareResponse['airAirPricePointList']['airAirPricePoint'];
        //  $airFareInfoList=$this->lowFareResponse['airLowFareSearchRsp']['airFareInfoList'];

        $count=0;
        $flightList = [];
        foreach ($airAirPricePointList as $out=> $airItem) {
            $count++;

            $airOptionlistOut=$airItem['airAirPricingInfo']['airFlightOptionsList']['airFlightOption']['airOption'];
//            $airOptionlistIn=$airItem['airAirPricingInfo']['airFlightOptionsList']['airFlightOption'][1]['airOption'];
            $airAirPricingInfo=$airItem['airAirPricingInfo']['@attributes'];
            $air['outBound']=$this->getAirBeanList($airOptionlistOut,$airAirPricingInfo);
          //  $air['inBound']=$this->getAirBeanList($airOptionlistIn,$airAirPricingInfo);
            $flightList[] = $air;
        }
        return $flightList;

    }

    /**
     * @param $key
     * @param $airLine
     * @return mixed
     * Based on the key and value its picked the air segment
     * //    Log::info('airIndex!!-->' .print_r($airIndex->attributes(),true));
     */
    private function airSegment($key, $airLine)
    {//&& strcmp((string)$airIndex->attributes()->Carrier,$airLine)==0 this would be need to test
        $airAirSegmentList = $this->lowFareResponse['airAirSegmentList']['airAirSegment'];
        foreach ($airAirSegmentList as $airIndex) {
            if (strcmp($airIndex['@attributes']['Key'], $key) == 0) {
                return $airIndex;
            }

        }


    }

    private function lowFareSearchRoundTrip()
    {



        $airAirPricePointList = $this->lowFareResponse['airAirPricePointList']['airAirPricePoint'];
      //  $airFareInfoList=$this->lowFareResponse['airLowFareSearchRsp']['airFareInfoList'];

        $count=0;
        $flightList = [];
        foreach ($airAirPricePointList as $out=> $airItem) {
            $count++;

            $airOptionlistOut=$airItem['airAirPricingInfo']['airFlightOptionsList']['airFlightOption'][0]['airOption'];
            $airOptionlistIn=$airItem['airAirPricingInfo']['airFlightOptionsList']['airFlightOption'][1]['airOption'];
            $airAirPricingInfo=$airItem['airAirPricingInfo']['@attributes'];
            $air['outBound']=$this->getAirBeanList($airOptionlistOut,$airAirPricingInfo);
            $air['inBound']=$this->getAirBeanList($airOptionlistIn,$airAirPricingInfo);
            $flightList[] = $air;
        }

 return $flightList;


        }



   private function getAirBeanList($airOptionlist,$airAirPricingInfo){




       $air = new Air();
       $airLine=$airAirPricingInfo['PlatingCarrier'];
       $air->airPrice=$airAirPricingInfo;
       $airSegment = [];
       if(!isset($airOptionlist[0]))
       {
           $airOptionlist=array($airOptionlist);
       }


       foreach($airOptionlist as $itemIn){

           if(!isset($itemIn['airBookingInfo'][0]))
           {
               $itemIn=array($itemIn['airBookingInfo']);
           }else{
               $itemIn=$itemIn['airBookingInfo'];
           }
           $temp = [];
           foreach($itemIn as $item)
           {

               $temp[]=$this->airSegment($item['@attributes']['SegmentRef'],$airLine);
               // Log::info($count." : ".print_r($this->airSegment($item['@attributes']['SegmentRef'],$airLine),true));
           }

           $airSegment[]=$temp;

       }

       $air->airSegment=$airSegment;


       return $air;

   }





}