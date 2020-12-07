<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class controladorSearchBD extends Controller
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
        return view('inicio');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $consultarInstrumentos = DB::table('instrumentos')->where('instrumento', 'like', '%'.$search.'%')
        ->orWhere('color', 'like', '%'.$search.'%')
        ->orWhere('id', 'like', '%'.$search.'%')
        ->paginate(5);
        if(count ($consultarInstrumentos) > 0){
            return view('ventasInstru', compact('consultarInstrumentos'));
        }else{
            
            return redirect('buscar')->with('mensaje', 'No tenemos el instrumento en inventario por el momento');
            
        }
    }

    public function searchCom(Request $request)
    {
        $search = $request->get('search2');
        $consultarComponentes = DB::table('componentes')->where('componente', 'like', '%'.$search.'%')
        ->orWhere('instrumento', 'like', '%'.$search.'%')
        ->orWhere('id_componente', 'like', '%'.$search.'%')
        ->paginate(5);
        if(count ($consultarComponentes) > 0){
            return view('ventasCompo', compact('consultarComponentes'));
        }else{
            
            return redirect('buscar')->with('mensaje2', 'No tenemos ese componente en inventario por el momento');
            
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
