<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function abreInicio(){
        return view('inicio');
    }

    public function abreAdminIns(){
        return view('adminInstru');
    }

   /*  public function abreAdminCom(){
        return view('adminCompo');
    } */

    public function abreInventario(){
        return view('inventario');
    }

    public function abreReportes(){
        return view('reportes');
    }

    public function abreVentasIns(){
        return view('ventasInstru');
    }

    public function abreVentasCom(){
        return view('ventasCompo');
    }

}
