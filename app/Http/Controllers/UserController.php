<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    //

    public function index(){

        Log::info('Index controller user logged in');

        return view('user.user');

    }
}
