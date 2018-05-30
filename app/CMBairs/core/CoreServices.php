<?php
/**
 * Created by PhpStorm.
 * User: dharshansithamparam
 * Date: 12/4/17
 * Time: 4:51 PM
 */

namespace App\CMBairs\core;



interface CoreServices
{

    public function sendToTrvPort($soap,$fileName);

    public function readLocalFile($path,$fileName);

    public function pregReplace($response);


    public  function dateFormat($date);


    public function getCities();

    }