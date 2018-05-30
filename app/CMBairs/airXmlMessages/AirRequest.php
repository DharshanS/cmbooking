<?php
/**
 * Created by PhpStorm.
 * User: dharshansithamparam
 * Date: 12/2/17
 * Time: 11:09 AM
 */

namespace app\CMBairs\airXmlMessages;


interface AirRequest
{
public function getOneWayRequest();
public function getRoundTripRequest();
public function getMultiTripRequest();
}