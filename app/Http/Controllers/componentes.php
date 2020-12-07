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
        $componenteid= DB::table('componentes')->where('id_componente',$id)->first();
        return view('detallecompo', compact('componenteid'));
    }

    public function edit($id)
    {
        //
    }

    public function update(ValidadorAdministracionCom $validador, $id){
        DB::table('componentes')->where('id_componente',$id)->update([
            "componente"=> $validador-> input('componente'),
            "instrumento"=> $validador-> input('instrumento'),
            "cantidad"=> $validador-> input('cantidad'),
            "compra"=> $validador-> input('precioCompra'),
            "venta"=> $validador-> input('precioVenta'),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('componentes')->with('mensaje','El registro se almaceno en la BD');
    }

    public function destroy($id)
    {
        DB::table('componentes')->delete($id);
        return redirect('componentes')->with('mensaje','El registro se almaceno en la BD');
    }
}
