<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\ValidadorVenderCom;
use Carbon\Carbon;

class controladorVentasComBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultarComponentes= DB::table('componentes')->get();
        return view('ventasCompo',compact('consultarComponentes'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidadorVenderCom $validador)
    {
        DB::table('ventacomponenete')->insert([
            "componente"=> $validador-> input('componente'),  
            "instrumento"=> $validador-> input('instrumento'),
            "cantidad"=> $validador-> input('cantidad'),
            "precio"=> $validador-> input('precio'),
            "total"=> $validador-> input('total'),
            "empleado"=> $validador-> input('empleado'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('componentesVenta')->with('mensaje', 'Se han agregado los datos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*
        $cantidad = DB::table('componentes')->pluck('cantidad')->sum();
        $ventacomponenete = DB::table('ventacomponenete')->pluck('cantidad')->sum();
        $stock = $cantidad - $ventacomponenete;

        DB::table('componentes')->where('id',$id)->update([
            "cantidad"=> $stock-> input('cantidad'),

        ]);
        return redirect('instrumentos')->with('actualizar','Dato actualizado con exito');
*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
