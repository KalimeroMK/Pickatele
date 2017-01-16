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
    Route::get('/', 'SettingsController@index');
    Route::get('/settings', 'SettingsController@index');
    Route::post('/settings/store', 'SettingsController@store')->name('admin.settings.store');
    Route::get('/settings/{id}/edit', 'SettingsController@edit')->name('admin.settings.edit');
    Route::post('/settings/update', 'SettingsController@update')->name('admin.settings.update');
    Route::resource('/users', 'UserController');
    Route::resource('/staticpage', 'StaticpageController');
    Route::resource('/slider', 'SliderController');
    Route::resource('/scripts', 'ScriptsController');
    Route::resource('/mainpages', 'MainpagesController');
    Route::resource('/genre', 'GenreController');
    Route::resource('/bundle', 'BundleController');
    Route::resource('/partner', 'PartnerController');
    Route::resource('/levels', 'LevelsController');
    Route::resource('/book', 'BooksController');
    Route::get('/getbooks', 'BooksController@getBooks');
    Route::resource('/faq', 'FaqController');
    Route::get('/sliders/{id}/book', 'SlidersController@index')->name('admin.sliders.index');
    Route::post('/sliders/store', 'SlidersController@store')->name('admin.sliders.store');
    Route::post('/sliders/destroy', 'SlidersController@destroy')->name('admin.sliders.destroy');
});



Route::get('/', 'HomeController@index');
Route::get('/about', 'MiniPageController@about');
Route::post('/about/send', 'EmailController@sendAbout');
Route::get('/contact', 'MiniPageController@contact');
Route::post('/contact/send', 'EmailController@sendContact');
Route::get('/copyright-policy', 'MiniPageController@copyright');
Route::get('/careers', 'MiniPageController@careers');
Route::get('/jobs', 'MiniPageController@jobs');
Route::post('/jobs/send', 'EmailController@sendJob');
Route::get('/help-center', 'HelpCenterController@index');
Route::post('/help-center/search', 'HelpCenterController@search');
Route::get('/terms', 'MiniPageController@terms');
Route::get('/privacy', 'MiniPageController@privacy');
Route::get('/books', 'BookController@index');
Route::post('/books', 'BookController@filter');
Route::get('/book/{slug}', 'BookController@getBook');
Route::get('/{slug}', 'HomeController@mainpages');

