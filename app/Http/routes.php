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
Route::get('eventos', 'PagesController@eventos');
Route::get('garrafon', 'PagesController@garrafon');
Route::get('nosotros', 'PagesController@acercade');
Route::get('productos', 'PagesController@productos');
Route::get('sucursales', 'PagesController@sucursales');
Route::get('bolsa-de-trabajo', 'PagesController@bolsaDeTrabajo');
Route::post('sendmail-unete', 'PagesController@sendmail_unete');
Route::post('sendmail2', 'PagesController@sendmail2');

// Route::post('sendmail', function (){
// 	return 'ok';
// });

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
