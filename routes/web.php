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

Route::get('/',                     'NewsController@renderNews');

Route::get('/create',                     'NewsController@renderCreateNews');
Route::post('/create',                     'NewsController@handleCreateNews');

Route::get('/edit',                     'NewsController@renderUpdateNews');
Route::post('/edit',                     'NewsController@handleUpdateNews');

Route::get('/remove',                     'NewsController@renderRemoveNews');
Route::post('/remove',                     'NewsController@handleRemoveNews');
