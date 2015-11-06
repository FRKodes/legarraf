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

Route::get('/', 'PagesController@index');
Route::get('acerca-de', 'PagesController@acercade');
Route::get('sucursales', 'PagesController@sucursales');
Route::get('productos', 'PagesController@productos');
Route::get('garrafon', 'PagesController@garrafon');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
