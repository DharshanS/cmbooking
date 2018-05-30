<?php
use
    \Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'AirController@index')->name('home');







    Route::get('/list','UserController@index')
        ->name('user_list')
        ->middleware('can:user_logIn');

Route::get('/api/getCities', [
    'uses'=> 'AirController@getCities',
    'as'=> 'air.getCities'
]);




//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
