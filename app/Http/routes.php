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
    return view('welcome');
});

Route::get('about', ['as' => 'about', 'uses' => 'PagesController@getAbout']);

Route::get('index',['as' => 'index', 'uses' => 'PagesController@getIndex']);

Route::get('contact',['as' => 'contact', 'uses' => 'PagesController@getContact']);

Route::resource('evento','EventosController');