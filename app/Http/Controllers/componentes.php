<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorAdministracionCom;
use App\Models\Componente;
use DB;
use Carbon\carbon;

class componentes extends Controller
{
    
    public function index(){
        $componente = Componente::all();
        return view('adminCompo') -> with('componente', $componente);
    }

    
    public function create()
    {
        
    }

    public function store(ValidadorAdministracionCom $validador){
            $componente = new Componente;

            $componente -> componente = $validador -> input('componente');
            $componente -> instrumento = $validador -> input('instrumento');
            $componente -> cantidad = $validador -> input('cantidad');
            $componente -> compra = $validador -> input('precioCompra');
            $componente -> venta = $validador -> input('precioVenta');
            $componente -> save();
        return redirect('/componentes')->with('mensaje','El registro se almaceno en la BD');
    }

    public function show($id){
        
    }

    public function edit($id)
    {
        //
    }

    public function update(ValidadorAdministracionCom $validador){
       /*  DB::table('componente')->where("id_componente" -> input('idcomponente'))->update([
            "componente"=> $validador-> input('componente'),
            "instrumento"=> $validador-> input('instrumento'),
            "cantidad"=> $validador-> input('cantidad'),
            "precioCompra"=> $validador-> input('precioCompra'),
            "precioVenta"=> $validador-> input('precioVenta'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('/componentes')->with('mensaje','El registro se almaceno en la BD'); */
    }

    public function destroy($id)
    {
        DB::table('componentes')->delete($id);
        return redirect('componentes');
    }
}
