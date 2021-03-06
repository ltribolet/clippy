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

Route::model('clip', 'Clip');
Route::model('user', 'User');

Route::group(array('before' => 'auth'), function()
{
	Route::get('/', 'ClipController@index');
	Route::get('/about', 'ClipController@about');
	Route::get('/get/{clip}', 'ClipController@get');
	Route::get('/create', 'ClipController@create');
	Route::get('/edit/{clip}', 'ClipController@edit');
	Route::get('/delete/{clip}', 'ClipController@delete');

	// Handle form submissions.
	Route::post('/create', 'ClipController@handleCreate');
	Route::post('/edit', 'ClipController@handleEdit');
	Route::post('/delete', 'ClipController@handleDelete');


	// User stuff
	Route::get('/user', 'UserController@index');
	Route::get('/user/{user}', 'UserController@get');
	Route::get('/user/edit/{user}', 'UserController@edit');
	Route::get('/user/delete/{user}', 'UserController@delete');

	// Handle form submissions.
	Route::post('/user/edit', 'UserController@handleEdit');
	Route::post('/user/delete', 'UserController@handleDelete');
});



// Users
Route::get('/subscribe', 'UserController@create');

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('login');
});

Route::get('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');


Route::post('/user/create', 'UserController@handleCreate');
Route::post('/login', 'UserController@handleLogin');
