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

// system routes

Route::get('home', ['as' => 'home', 'uses' => 'systemController@index']);
Route::get('admin', ['as'=>'admin', 'uses' => 'systemController@admin']);
Route::get('map', ['as' => 'map', 'uses' => 'systemController@map']);
Route::resource('drivers', 'systemController');
// Route::get('/admin/{{$id}}/edit', ['as' => 'edit', 'uses' => 'systemController@edit']);
