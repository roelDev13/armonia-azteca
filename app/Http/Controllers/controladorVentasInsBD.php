<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorVenderIns;
use DB;
use Carbon\Carbon;

class controladorVentasInsBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultarInstrumentos= DB::table('instrumentos')->get();
        return view('ventasInstru',compact('consultarInstrumentos'));
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
    public function store(ValidadorVenderIns $validador)
    {   
        

        DB::table('ventaintrumento')->insert([
            "instrumento"=> $validador-> input('instrumento'),  
            "color"=> $validador-> input('color'),
            "cantidad"=> $validador-> input('cantidad'),
            "precio"=> $validador-> input('precio'),
            "total"=> $validador-> input('total'),
            "empleado"=> $validador-> input('empleado'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('instrumentosVenta')->with('mensaje', 'Se han agregado los datos');
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
        //
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
