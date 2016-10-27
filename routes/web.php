<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/sensor', ['as' => 'sensor', 'uses' => 'systemController@sensor']);

Route::group(['middleware' => ['web']], function(){

  // system routes
  Route::get('home', ['as' => '/home', 'uses' => 'systemController@index']);
  Route::get('admin', ['as'=>'/admin', 'uses' => 'systemController@admin']);
  Route::get('map', ['as' => '/map', 'uses' => 'systemController@map']);
  Route::resource('drivers', 'systemController');
  Route::get('profile', ['as' => 'profile', 'uses' => 'systemController@profile']);

});

Route::group(['middleware' => ['web']], function(){
  //sensor routes
  Route::resource('vehicle', 'vehicle');
  Route::get('vehicles', ['as' => 'vehicles', 'uses' => 'vehicle@index']);
  // Route::get('/sensor', ['as' => 'sensor', 'uses' => 'systemController@sensor']);
  // Route::put('/detect', ['as' => 'detect', 'uses' => 'systemController@detect']);

});
