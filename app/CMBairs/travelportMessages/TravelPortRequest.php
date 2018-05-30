<?php
/**
 * Created by PhpStorm.
 * User: dharshansithamparam
 * Date: 12/2/17
 * Time: 8:50 PM
 */

namespace app\CMBairs\travelportMessages;


use App\CMBairs\airBeans\AirSearch;

interface TravelPortRequest
{
public  function getOneWaySearchRequest(AirSearch $airSearch);
}