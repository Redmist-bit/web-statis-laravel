<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'HomeController@home');

Route::get('/register', 'AuthController@form');

Route::post('/welcome', 'AuthController@welcome');

Route::get('/master', function(){
    return view('adminlte.master');
});

Route::get('/', function(){
    return view('items.index');
});

Route::get('/data-tables', function(){
    return view('items.data');
});

// Route::get('/pertanyaan/create','AskController@create');
// Route::post('/pertanyaan','AskController@store');
// Route::get('/pertanyaan','AskController@index')->name('ask.index');
// Route::get('/pertanyaan/{id}','AskController@show');
// Route::get('/pertanyaan/{id}/edit','AskController@edit');
// Route::put('/pertanyaan/{id}','AskController@update');
// Route::delete('/pertanyaan/{id}','AskController@destroy');

// Route::resource('pertanyaan','PertanyaanController');

Route::resource('pertanyaan','AskController');