<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('user', function()
{
	$user = new User;
	$user->username = "Test User";
	$user->email = "email@example.com";
	$user->password = "prueba";
	
	$user->save();
	
	return "El usuario de prueba se ha guardado en la base de datos";
});

Route::controller('users', 'UserController');

//Página visible donde esta el formulario para identificarse
Route::get('login', ['before' => 'guest', 'uses' => 'AuthController@getIndex']);



//Página oculta donde sólo puede ingresar un usuario identificado
Route::get('auth', ['before' => 'auth', 'uses' => 'AuthController@getAdmin']);


//Procesa el formulario e identifica al usuario
Route::post('login', ['uses' => 'AuthController@doLogin', 'before' => 'guest']);
//Desconecta al usuario
Route::get('logout', ['uses' => 'AuthController@doLogout', 'before' => 'auth']);

