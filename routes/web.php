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

Route::get('home', ['as' => 'home', 'uses' => 'systemControler@index']);
Route::get('admin', ['as'=>'admin', 'uses' => 'systemControler@admin']);
Route::get('map', ['as' => 'map', 'uses' => 'systemControler@map']);
Route::resource('drivers', 'systemControler');
Route::get('editor', ['as' => 'editor', 'uses' => 'systemControler@editor']);
