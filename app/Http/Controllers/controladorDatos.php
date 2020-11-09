<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorAdministracionCom;

use App\Http\Requests\ValidadorVenderCom;

use App\Http\Requests\ValidadorVenderIns;

use App\Http\Requests\ValidadorAdministracionIns;

class controladorDatos extends Controller
{
    public function validadorAdminCompo(ValidadorAdministracionCom $datosValidados){
        
        return redirect('AdministracionComponentes')->with('mensaje','El registro se almaceno en la BD');  
    }
    public function validadorAdminInstru(ValidadorAdministracionIns $datosValidados){
        
        return redirect('AdministracionInstrumento')->with('mensaje','El registro se almaceno en la BD');  
    }
    public function validadorVenderCompo(ValidadorVenderCom $datosValidados){
        
        return redirect('VenderComponentes')->with('mensaje','El registro se almaceno en la BD');  

    }
    public function validadorVenderInstru(ValidadorVenderIns $datosValidados){
       
        return redirect('VenderInstrumentos')->with('mensaje','El registro se almaceno en la BD');  
    }

    public function validadorReporteCompo(ValidadorVenderCom $datosValidados){
       
        return redirect('ReportesComponentes')->with('mensaje','El registro se almaceno en la BD');  
    }

    public function validadorReporteInstru(ValidadorVenderIns $datosValidados){
       
        return redirect('ReportesInstrumentos')->with('mensaje','El registro se almaceno en la BD');  
    }

}
