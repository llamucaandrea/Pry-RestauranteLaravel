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

Route::get('/', 'InicioController@index');

//auth
Route::get('login', 'LoginController@index');
Route::post('auth/login', 'LoginController@login');
Route::get('auth/logout', 'LoginController@logout');

//cliente
Route::group(['middleware' => ['auth','cajero']], function () {
	Route::get('cliente', 'ClienteController@index');
	Route::get('cliente/create', 'ClienteController@create');
	Route::get('cliente/{id}/edit', 'ClienteController@edit');
	Route::get('cliente/{id}/destroy', 'ClienteController@destroy');
	Route::post('cliente/store', 'ClienteController@store');
	Route::post('cliente/update', 'ClienteController@update');
});
Route::group(['middleware' => ['auth','administrador']], function () {
	Route::get('cliente', 'ClienteController@index');
	Route::get('cliente/create', 'ClienteController@create');
	Route::get('cliente/{id}/edit', 'ClienteController@edit');
	Route::get('cliente/{id}/destroy', 'ClienteController@destroy');
	Route::post('cliente/store', 'ClienteController@store');
	Route::post('cliente/update', 'ClienteController@update');
});

//almuerzo
Route::group(['middleware' => ['auth','administrador']], function () {
	Route::get('almuerzo', 'AlmuerzoController@index');
	Route::get('almuerzo/create', 'AlmuerzoController@create');
	Route::get('almuerzo/{id}/edit', 'AlmuerzoController@edit');
	Route::get('almuerzo/{id}/destroy', 'AlmuerzoController@destroy');
	Route::post('almuerzo/store', 'AlmuerzoController@store');
	Route::post('almuerzo/update', 'AlmuerzoController@update');
});
Route::group(['middleware' => ['auth','cocinero' ]], function () {
	Route::get('almuerzo', 'AlmuerzoController@index');
	Route::get('almuerzo/create', 'AlmuerzoController@create');
	Route::get('almuerzo/{id}/edit', 'AlmuerzoController@edit');
	Route::get('almuerzo/{id}/destroy', 'AlmuerzoController@destroy');
	Route::post('almuerzo/store', 'AlmuerzoController@store');
	Route::post('almuerzo/update', 'AlmuerzoController@update');
});

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
Route::group(['middleware' => ['auth','administrador']], function () {
	//index
	Route::get('empleado', 'EmpleadoController@index');
	Route::get('empleado/{id}/detalleEmpleado', 'EmpleadoController@detalleEmpleado');
	//crearempleado
	Route::get('empleado/create', 'EmpleadoController@create');
	//crear datos personales
	Route::post('empleado/datosEmpleado', 'EmpleadoController@createEmpleado');
	//crear estudio
	Route::post('empleado/gradoAcademico', 'EmpleadoController@createAcademico');
	//crear experiencia
	Route::get('empleado/datosExperiencia', 'EmpleadoController@createDatoExperiencia');
	Route::post('empleado/experiencia', 'EmpleadoController@createExperiencia');
	//crear referencias
	Route::get('empleado/datosReferencia', 'EmpleadoController@createDatoReferencia');
	Route::post('empleado/referenciaPersonal', 'EmpleadoController@createReferencia');
	//crear foto empleado
	Route::get('empleado/datosCompletos', 'EmpleadoController@createFoto');
	//crear
	Route::post('empleado/store', 'EmpleadoController@store');
	//atras crear empleado
	Route::get('empleado/datoEmpleado', 'EmpleadoController@getEmpleado');
	Route::get('empleado/datoAcademico', 'EmpleadoController@getAcademico');
	Route::get('empleado/datoExperiencia', 'EmpleadoController@getExperiencia');
	Route::get('empleado/datoReferencia', 'EmpleadoController@getReferencia');
	//editar empleado
	Route::get('empleado/{id}/edit', 'EmpleadoController@edit');
	//modificar
	Route::post('empleado/updatePersonal', 'EmpleadoController@updatePersonal');
	Route::post('empleado/updateAcademico', 'EmpleadoController@updateAcademico');
	Route::post('empleado/updateExperiencia', 'EmpleadoController@updateExperiencia');
	Route::post('empleado/updateReferencia', 'EmpleadoController@updateReferencia');
	Route::post('empleado/updateFoto', 'EmpleadoController@updateFoto');
	//crear en editar
	Route::post('empleado/storeAcademico', 'EmpleadoController@storeAcademico');
	Route::post('empleado/storeExperiencia', 'EmpleadoController@storeExperiencia');
	Route::post('empleado/storeReferencia', 'EmpleadoController@storeReferencia');
	//eliminar
	Route::get('empleado/{id}/destroy', 'EmpleadoController@destroy');
	Route::get('empleado/{id}/destroyAcademico', 'EmpleadoController@destroyAcademico');
	Route::get('empleado/{id}/destroyExperiencia', 'EmpleadoController@destroyExperiencia');
	Route::get('empleado/{id}/destroyReferencia', 'EmpleadoController@destroyReferencia');
});