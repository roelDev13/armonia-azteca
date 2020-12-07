<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function store(Request $validador)
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
        return redirect('instrumentos');
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
        return redirect('AdministracionInstrumento/create', compact('instrumentoid'));
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
    public function update(Request $validador, $id)
    {
        DB::table('instrumentos')->where('id',$id)->update([
            "instrumento"=> $validador-> input('instrumento'),
            "color"=> $validador-> input('color'),
            "cantidad"=> $validador-> input('cantidad'),
            "precioCompra"=> $validador-> input('precioCompra'),
            "precioVenta"=> $validador-> input('precioVenta'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('instrumentos')->with('actualizado','Libro actualizado con exito');
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
        return redirect('instrumentos')->with('eliminado', 'El libro se borro de la BD');
    }
}
