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

Route::get('formularioAdminInstru',[ 'as' =>'rutaAdminInstru','uses' => 'controladorVistas@abreAdminIns']);

Route::get('formularioAdminCompo',[ 'as' =>'rutaAdminCompo','uses' => 'controladorVistas@abreAdminCom']);

Route::get('formularioInventario',[ 'as' =>'rutaInventario','uses' => 'controladorVistas@abreInventario']);

Route::get('formularioReportes',[ 'as' =>'rutaReportes','uses' => 'controladorVistas@abreReportes']);

Route::get('formularioVentasCompo',[ 'as' =>'rutaVentasCompo','uses' => 'controladorVistas@abreVentasCom']);

Route::get('formularioVentasInstru',[ 'as' =>'rutaVentasInstru','uses' => 'controladorVistas@abreVentasIns']);
