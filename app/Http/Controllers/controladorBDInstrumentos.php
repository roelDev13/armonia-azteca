<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorAdministracionIns;
use DB;
use Carbon\Carbon;


class controladorBDInstrumentos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultarInstrumentos= DB::table('instrumentos')->get();
        return view('admininstru',compact('consultarInstrumentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminInstru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidadorAdministracionIns $validador)
    {
        DB::table('instrumentos')->insert([
            "instrumento"=> $validador-> input('instrumento'),
            "color"=> $validador-> input('color'),
            "cantidad"=> $validador-> input('cantidad'),
            "precioCompra"=> $validador-> input('precioCompra'),
            "precioVenta"=> $validador-> input('precioVenta'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('instrumentos')->with('mensaje', 'Se han agregado los datos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instrumentoid= DB::table('instrumentos')->where('id',$id)->first();
        return view('detalleInstru', compact('instrumentoid'));
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
    public function update(ValidadorAdministracionIns $validador, $id)
    {
        DB::table('instrumentos')->where('id',$id)->update([
            "instrumento"=> $validador-> input('instrumento'),
            "color"=> $validador-> input('color'),
            "cantidad"=> $validador-> input('cantidad'),
            "precioCompra"=> $validador-> input('precioCompra'),
            "precioVenta"=> $validador-> input('precioVenta'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('instrumentos')->with('actualizar','Dato actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('instrumentos')->delete($id);
        return redirect('instrumentos')->with('eliminar', 'El libro se borro de la BD');
    }
}
