<?php

namespace App\Http\Controllers;

use App\Models\hojadevida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HojadevidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datoshoja['hojadevida']=hojadevida::paginate(5);
        return view('hojadevida.index', $datoshoja);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hojadevida.create');
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
        //Se guarda la informacion a la BD
        $datoshojadevida = request()->except('_token');
        if($request->hasFile('foto')) {
            $datoshojadevida['foto']=$request->file('foto')->store('uploads','public');
        }
        hojadevida::insert($datoshojadevida);
        //return response()->json($datoshojadevida);
        return redirect('hojadevida')->with('mensaje','Empleado Agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hojadevida  $hojadevida
     * @return \Illuminate\Http\Response
     */
    public function show(hojadevida $hojadevida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hojadevida  $hojadevida
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $hojadevida=hojadevida::findOrFail($id);
        return view('hojadevida.edit',compact('hojadevida') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hojadevida  $hojadevida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datoshojadevida = request()->except(['_token','_method']);
        
        if($request->hasFile('foto')){
            $hojadevida=hojadevida::findOrFail($id);

            Storage::delete('public/'.$hojadevida->foto);

            $datoshojadevida['foto']=$request->file('foto')->store('uploads','public');
        }
        hojadevida::where('id','=',$id)->update($datoshojadevida);
        $hojadevida=hojadevida::findOrFail($id);
        return view('hojadevida.edit',compact('hojadevida'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hojadevida  $hojadevida
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar los datos
        $hojadevida=hojadevida::findOrFail($id);
        if(Storage::delete('public/'.$hojadevida->foto))
        { 
            hojadevida::destroy($id);

        }

        hojadevida::destroy($id);
        return redirect('hojadevida')->with('mensaje','Empleado Borrado con exito');


    }
}
