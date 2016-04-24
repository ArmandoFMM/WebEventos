<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about', ['as' => 'about', 'uses' => 'PagesController@getAbout']);

Route::get('index', ['as' => 'index', 'uses' => 'PagesController@getIndex']);

Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@getContact']);

Route::get('admin', ['as' => 'admin', 'uses' => 'PagesController@admin']);

Route::get('login', ['as' => 'login', 'uses' => 'PagesController@login']);

Route::get('signup', ['as' => 'signup', 'uses' => 'PagesController@signup']);

Route::get('logout', ['as' => 'logout', 'uses' => 'LogController@logout']);

Route::resource('evento', 'EventosController');

Route::resource('local', 'LocalController');

Route::resource('user','UserController');

Route::resource('log','LogController');

Route::resource('mail','MailController');


