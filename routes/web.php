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



Route::get('/', 'HomeController@index');
Route::get('/about', 'MiniPageController@about');
Route::get('/copyright-policy', 'MiniPageController@copyright');
Route::get('/careers', 'MiniPageController@careers');
Route::get('/terms', 'MiniPageController@terms');
Route::get('/privacy', 'MiniPageController@privacy');
Route::get('/books', 'BookController@index');
Route::get('/books/1', 'BookController@getBook');
Route::get('/{slug}', 'HomeController@mainpages');

