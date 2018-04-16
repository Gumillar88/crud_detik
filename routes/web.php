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

Route::get('/news/create',                     'NewsController@renderCreateNews');
Route::post('/news/create',                     'NewsController@handleCreateNews');

Route::get('/news/edit',                     'NewsController@renderUpdateNews');
Route::post('/news/edit',                     'NewsController@handleUpdateNews');

Route::get('/news/delete',                     'NewsController@renderRemoveNews');
Route::post('/news/delete',                     'NewsController@handleRemoveNews');
