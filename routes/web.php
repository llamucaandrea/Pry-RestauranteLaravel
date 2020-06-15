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

//empleado
Route::get('empleado', 'EmpleadoController@index');
Route::get('empleado/create', 'EmpleadoController@create');
Route::get('empleado/{id}/edit', 'EmpleadoController@edit');
Route::get('empleado/{id}/destroy', 'EmpleadoController@destroy');
Route::post('empleado/store', 'EmpleadoController@store');
Route::post('empleado/update', 'EmpleadoController@update');
Route::get('empleado/{id}/detalleEmpleado', 'EmpleadoController@detalleEmpleado');
