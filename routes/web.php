<?php

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

use App\Events\eventTrigger;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alertBox',function(){
	return view('testbroadcast');
});

Route::get('/fireEvent', function(){
	event(new eventTrigger());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');