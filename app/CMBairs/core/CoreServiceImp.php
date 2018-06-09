<?php
/**
 * Created by PhpStorm.
 * User: dharshan
 * Date: 1/1/18
 * Time: 11:00 AM
 */

namespace App\CMBairs\core;


use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Exception;
use App\CMBairs\core\MySoapClass;
use Carbon\Carbon;



class CoreServiceImp implements CoreServices
{



    public function sendToTrvPort($soap,$fileName){

        // Log::info($soap);
        $gzdata = gzencode($soap);
        $auth = base64_encode(config('app.credentials'));
        $curl = curl_init(config('app.trpAirServiceUrl')); // defined at top


        $header = array(
            "Content-Type: text/xml;charset=UTF-8",
            "Content-Encoding: gzip",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: \"\"",
            "Authorization: Basic $auth",
            "Content-length: " . strlen($gzdata),
        );
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $gzdata);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        if(config('cmb.connectEnv')=='live'){
            $response = curl_exec($curl);
            curl_close($curl);
            $travelXml =$this->pregReplace($response);
            $response = simplexml_load_string($travelXml);
            return $response;

        }elseif (config('cmb.connectEnv')=='json'){

            $travelXml= $this->readLocalFile(config('cmb.sampleFilePath'),$fileName);
            $pregXml =$this->pregReplace($travelXml);
            $response=simplexml_load_string($pregXml);
            $json = json_encode($response);
            $responseArray = json_decode($json, true);
          // Log::info(print_r($responseArray,true));
            return $responseArray;

        }else{

            $travelXml= $this->readLocalFile(config('cmb.sampleFilePath'),$fileName);
            $pregXml =$this->pregReplace($travelXml);
            $response=simplexml_load_string($pregXml);

            return $response;
        }
    }




    function readLocalFile($path,$fileName){
        try
        {
            $content=Storage::get($path.$fileName);
            return $content;
        }
        catch ( Exception $exception)
        {
            throwException("The file doesn't exist");
        }
    }

    function pregReplace($response)
    {
        return preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $response);
    }



    function dateFormat($date)
    {
        // TODO: Implement dateFormat() method.
        $date=str_replace('T',' ',$date);
        $dateArray=explode('.000',$date);
        $date = Carbon::createFromFormat('Y-m-d H:i:s',$dateArray[0], $dateArray[1]);
        $dateFormat=strtoupper($date->formatLocalized('  %a %d %b %Y, %I:%M %p '));

        return $dateFormat;
    }

    function timeDifferace($startTime,$finishedTime){

       return Carbon::parse($finishedTime)->diff(Carbon::parse($startTime))->format('%H HOUR,%I MINUTES ');

    }

    public function getCities()
    {
        // TODO: Implement getCities() method.
    }


    function getCitiesFromDb($query){
      //  $query="select * from airports where city like $query%";
       return DB::table('airports')->where('city', 'like', 'col%')->get();


    }



}