<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorAdministracionCom;
use DB;
use Carbon\carbon;

class componentes extends Controller
{
    
    public function index(){
        $getComponentes = DB::table('componentes')->get();
        return view('adminCompo', compact('getComponentes'));
    }

    
    public function create()
    {
        
    }

    public function añadirComponentes(ValidadorAdministracionCom $validador){
        DB::table('componentes')->insert([
            "componente" => $validador -> input('componente'),
            "instrumento" => $validador -> input('instrumento'),
            "cantidad" => $validador -> input('cantidad'),
            "compra" => $validador -> input('precioCompra'),
            "venta" => $validador -> input('precioVenta'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('componentes')->with('mensaje','El registro se almaceno en la BD');
    }

    public function show($id){
        $componenteid= DB::table('componente')->where('id',$id)->first();
        return view('adminCompo', compact('libroid'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        DB::table('componentes')->delete($id);
        return redirect('componentes');
    }
}
