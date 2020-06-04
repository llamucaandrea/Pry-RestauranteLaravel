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

Route::get('/', function () {
    return view('welcome');
});
//cliente
Route::get('cliente', 'ClienteController@index');
Route::get('cliente/create', 'ClienteController@create');
Route::get('cliente/{id}/edit', 'ClienteController@edit');
Route::get('cliente/{id}/destroy', 'ClienteController@destroy');
Route::post('cliente/store', 'ClienteController@store');
Route::post('cliente/update', 'ClienteController@update');
