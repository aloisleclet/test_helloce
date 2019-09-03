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

Route::get('/', 'IndexController@index');

Route::get('/edit/{id}', 'EditController@edit');
Route::post('/edit/{id}', 'EditController@update');

Route::get('/create', 'CreateController@create');
Route::post('/create', 'CreateController@save');

Route::get('/delete/{id}', 'DeleteController@delete');
