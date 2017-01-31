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
Route::get('/admin/event/{id}/edit', 'eventController@edit');
Route::patch('/admin/event/{id}', 'eventController@update');

Route::get('/user/add', 'userController@create');
Route::post('/user/save', 'userController@store');
Route::get('/user/{id}/edit', 'userController@edit');
Route::patch('/user/{id}', 'userController@update');

Route::post('/login', 'loginController@authenticate');

Route::get('admin/users', 'userController@index');
