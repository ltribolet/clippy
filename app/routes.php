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

Route::model('paste', 'Pastes');

Route::get('/', 'ClipController@index');
Route::get('/get/{paste}', 'ClipController@get');
Route::get('/create', 'ClipController@create');
Route::get('/edit/{paste}', 'ClipController@edit');
Route::get('/delete/{paste}', 'ClipController@delete');

// Handle form submissions.
Route::post('/create', 'ClipController@handleCreate');
Route::post('/edit', 'ClipController@handleEdit');
Route::post('/delete', 'ClipController@handleDelete');
