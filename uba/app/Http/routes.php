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

Route::get('/', 'eventController@index');
Route::get('/event/{id}', 'eventController@show');
Route::get('/user/add', 'userController@create');
Route::post('/user/save', 'userController@store');
