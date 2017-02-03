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
Route::get('/admin/events', 'eventController@adminIndex');
Route::patch('/admin/event/{id}', 'eventController@update');
Route::post('/admin/event/new', 'eventController@store');
Route::get('/admin/event/create', 'eventController@create');


Route::get('/admin/participants', 'eventController@showparticipants');
Route::get('/event/{id}/participate/{usid}', 'eventController@addParticipant');



Route::get('/user/add', 'userController@create');
Route::post('/user/save', 'userController@store');
Route::get('/user/{id}/edit', 'userController@edit');
Route::patch('/user/{id}', 'userController@update');
Route::get('/admin/user/{id}/makeadmin', 'userController@makeadmin');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('admin/users', 'userController@index');
