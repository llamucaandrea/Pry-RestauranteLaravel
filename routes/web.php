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

//almuerzo
Route::get('almuerzo', 'AlmuerzoController@index');
Route::get('almuerzo/create', 'AlmuerzoController@create');
Route::get('almuerzo/{id}/edit', 'AlmuerzoController@edit');
Route::get('almuerzo/{id}/destroy', 'AlmuerzoController@destroy');
Route::post('almuerzo/store', 'AlmuerzoController@store');
Route::post('almuerzo/update', 'AlmuerzoController@update');

//menuFijo
Route::get('menuFijo', 'MenuFijoController@index');
Route::get('menuFijo/create', 'MenuFijoController@create');
Route::get('menuFijo/{id}/edit', 'MenuFijoController@edit');
Route::get('menuFijo/{id}/destroy', 'MenuFijoController@destroy');
Route::post('menuFijo/store', 'MenuFijoController@store');
Route::post('menuFijo/update', 'MenuFijoController@update');

//menu
Route::get('menu', 'MenuController@index');
Route::get('menu/createAlmuerzo', 'MenuController@createAlmuerzo');
Route::get('menu/{id}/edit', 'MenuController@edit');
Route::get('menu/{id}/destroy', 'MenuController@destroy');
Route::post('menu/storeAlmuerzo', 'MenuController@storeAlmuerzo');
Route::post('menu/update', 'MenuController@update');

//empleado
Route::get('empleado', 'EmpleadoController@index');
Route::get('empleado/create', 'EmpleadoController@create');
Route::get('empleado/{id}/edit', 'EmpleadoController@edit');
Route::get('empleado/{id}/destroy', 'EmpleadoController@destroy');
Route::post('empleado/store', 'EmpleadoController@store');
Route::post('empleado/update', 'EmpleadoController@update');
Route::get('empleado/{id}/detalleEmpleado', 'EmpleadoController@detalleEmpleado');
Route::post('empleado/gradoAcademico', 'EmpleadoController@createAcademico');
Route::post('empleado/experiencia', 'EmpleadoController@createExperiencia');
Route::post('empleado/referenciaPersonal', 'EmpleadoController@createReferencia');
Route::post('empleado/datosEmpleado', 'EmpleadoController@createEmpleado');
Route::get('empleado/datosExperiencia', 'EmpleadoController@createDatoExperiencia');
Route::get('empleado/datosReferencia', 'EmpleadoController@createDatoReferencia');
Route::get('empleado/datosCompletos', 'EmpleadoController@createFoto');
Route::get('empleado/datoEmpleado', 'EmpleadoController@getEmpleado');
Route::get('empleado/datoAcademico', 'EmpleadoController@getAcademico');
Route::get('empleado/datoExperiencia', 'EmpleadoController@getExperiencia');
Route::get('empleado/datoReferencia', 'EmpleadoController@getReferencia');
