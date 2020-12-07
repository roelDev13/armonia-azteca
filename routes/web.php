<?php

use Illuminate\Support\Facades\Route;

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
Route::get('componentes','componentes@index') -> name('adminCompo');

Route::post('componentes','componentes@añadirComponentes') -> name('componentes.añadir');

Route::delete('componentes/{id}','componentes@destroy') -> name('componentes.destroy');
