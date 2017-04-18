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

Route::get('/', 'WEB\IndexController@index');

Route::post('/authenticate', 'WEB\IndexController@authenticate');

Route::post('/logout', 'WEB\IndexController@logout');

Auth::routes();

Route::get('/home', 'WEB\HomeController@index');

Route::get('/initial', 'WEB\HomeController@initial');

Route::get('/party', 'WEB\HomeController@party');

Route::get('/settings', 'WEB\HomeController@settings');

Route::get('/profile', 'WEB\HomeController@profile');

Route::get('/notifications', 'WEB\HomeController@notifications');

Route::get('/now', 'WEB\HomeController@now');

Route::get('/events', 'WEB\HomeController@events');

Route::get('/list-party', 'WEB\HomeController@listParty');

Route::get('/create-party', 'WEB\HomeController@createParty');

Route::get('/is-offline', 'WEB\HomeController@isOffline');
