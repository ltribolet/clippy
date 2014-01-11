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
