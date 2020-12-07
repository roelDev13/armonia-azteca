<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/',[ 'as' => 'rutaInicio','uses' => 'controladorVistas@abreInicio']);

Route::get('AdministracionInstrumento',[ 'as' =>'rutaAdminInstru','uses' => 'controladorVistas@abreAdminIns']);

/* Route::get('AdministracionComponentes',[ 'as' =>'rutaAdminCompo','uses' => 'controladorVistas@abreAdminCom']); */

Route::get('ReportesInstrumentos',[ 'as' =>'rutaInventario','uses' => 'controladorVistas@abreInventario']);

Route::get('ReportesComponentes',[ 'as' =>'rutaReportes','uses' => 'controladorVistas@abreReportes']);

Route::get('VenderComponentes',[ 'as' =>'rutaVentasCompo','uses' => 'controladorVistas@abreVentasCom']);

Route::get('VenderInstrumentos',[ 'as' =>'rutaVentasInstru','uses' => 'controladorVistas@abreVentasIns']);

//Para envio de datos
 
Route::post('validadorAdminCompo',[ 'as' =>'rutaDatosCompo','uses' => 'controladorDatos@validadorAdminCompo']);

Route::post('validadorAdminInstru',[ 'as' =>'rutaDatosInstru','uses' => 'controladorDatos@validadorAdminInstru']);

Route::post('validadorVenderCompo',[ 'as' =>'rutaVentaCompo','uses' => 'controladorDatos@validadorVenderCompo']);

Route::post('validadorVenderInstru',[ 'as' =>'rutaVentaInstru','uses' => 'controladorDatos@validadorVenderInstru']);

Route::post('validadorReporteCompo',[ 'as' =>'rutaVentaInstru','uses' => 'controladorDatos@validadorReporteCompo']);

Route::post('validadorReporteInstru',[ 'as' =>'rutaVentaInstru','uses' => 'controladorDatos@validadorReporteInstru']);


//Rutas para componentes
Route::resource('/componentes','componentes');
/* Route::get('componentes','componentes@index') -> name('adminCompo'); */
Route::post('componentes','componentes@añadirComponentes') -> name('componentes.añadir');
Route::delete('componentes/{id}','componentes@destroy') -> name('componentes.destroy');

//Para CRUD de Administración de Instrumentos

Route::get('AdministracionInstrumento/create', 'controladorBDInstrumentos@create')->name('instrumentos.create');

Route::post('instrumentos', 'controladorBDInstrumentos@store')->name('instrumentos.store');

Route::get('instrumentos','controladorBDInstrumentos@index')->name('instrumentos.index');

Route::get('instrumentos/{id}', 'controladorBDInstrumentos@show')->name('instrumentos.show');

Route::delete('instrumentos/{id}', 'controladorBDInstrumentos@destroy')->name('instrumentos.destroy');

Route::put('instrumentos/{id}', 'controladorBDInstrumentos@update')->name('instrumentos.update');


//ruta Controlador Ventas

Route::get('instrumentosVenta','controladorVentasInsBD@index')->name('instrumentosVenta.index');

Route::get('componentesVenta','controladorVentasComBD@index')->name('componentesVenta.index');


//Rutas de Inicio

Route::get('search', 'controladorSearchBD@search')->name('buscar.search');

Route::get('searchCom', 'controladorSearchBD@searchCom')->name('buscar.searchCom');

Route::get('buscar','controladorSearchBD@create')->name('buscar.index');
