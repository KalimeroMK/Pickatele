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
    return view('main.home');
});

Route::group(['middleware' => ['web'], 'prefix' => 'admin'], function () {
    Route::auth();
    Route::get('/', 'UserController@index');
    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/admin');
    });
    Route::resource('/users', 'UserController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
