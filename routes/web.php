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

Route::get('AdministracionComponentes',[ 'as' =>'rutaAdminCompo','uses' => 'controladorVistas@abreAdminCom']);

Route::get('ReportesInstrumentos',[ 'as' =>'rutaInventario','uses' => 'controladorVistas@abreInventario']);

Route::get('ReportesComponentes',[ 'as' =>'rutaReportes','uses' => 'controladorVistas@abreReportes']);

Route::get('VenderComponentes',[ 'as' =>'rutaVentasCompo','uses' => 'controladorVistas@abreVentasCom']);

Route::get('VenderInstrumentos',[ 'as' =>'rutaVentasInstru','uses' => 'controladorVistas@abreVentasIns']);
