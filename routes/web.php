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




Route::group(['middleware' => ['web'], 'prefix' => 'admin'], function () {
    Auth::routes();
    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('/', 'UserController@index');
    Route::resource('/users', 'UserController');
    Route::resource('/staticpage', 'StaticpageController');
    Route::resource('/slider', 'SliderController');
    Route::resource('/scripts', 'ScriptsController');
    Route::resource('/mainpages', 'MainpagesController');
});
Route::group(['middleware' => ['web'], 'prefix' => 'admin'], function () {
    Route::auth();
    Route::get('/', 'HomeController@index');
});


Route::get('/', 'HomeController@index');
Route::get('/{slug}', 'HomeController@mainpages');

