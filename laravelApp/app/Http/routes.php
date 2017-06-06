<?php

// DB::listen(function($query){
// 	var_dump($query->sql, $query->bindings)
// });

// Post::all();

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

	// Route::get('/', 'PagesController@home');
	Route::get('/',  [
		'as'=>'home',
		'uses'=>'PagesController@home'
		]);


	// Registration
	Route::get('register', [
		'as'=>'register_path',
		'uses' => 'RegistrationController@create'
	]);

	Route::post('register', [
		'as'=>'register_path',
		'uses' => 'RegistrationController@store'
	]);



























// OLD APP


	Route::get('MLS', 'MLSController@MLS');

	// MLS Specific Routes
	Route::get('MLS/{mls}', 'MLSController@show');
	Route::post('MLS/{mls}/notes','NotesController@store');

	Route::get('notes/{note}/edit', 'NotesController@edit');
	Route::patch('notes/{note}', 'NotesController@update');

	Route::get('notes/{note}/delete', 'NotesController@delete');


	//Flashing to session :D
	// Route::get('/', function (){
	// 	Session::flash('status', 'Hello There');
	// 	return view('static.welcome');

	// });



// });

