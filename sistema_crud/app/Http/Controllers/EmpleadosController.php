<?php

namespace App\Http\Controllers;

use App\Models\empleados;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class EmpleadosController extends Controller
{
      
    public function index()
    {
        //
        $empleados = empleados::all();
        return view('empleados.index', ['empleados' => $empleados]);
 
    }
    public function getcontacto() {
 
        return response()->json(empleados::all(),200); 
   }

    public function actualizarcontacto(Request $request,$id) {
        
        $empleados = empleados::find($id);
        if (is_null($empleados)){
            return response()->json(["message"=>"Error en el Registro!!"],404);       
        }    
        $empleados->update($request->all());
        return response()->json(empleados::all(),200);        

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleados.create');
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
        $empleados = request()->except('_token');
        empleados::insert($empleados);
        return response()->json($empleados);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //        
        $empleados=empleados::findOrFail($id);
        return view('empleados.edit',compact('empleados') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $empleados = request()->except(['_token','_method']);
        
        empleados::where('id','=',$id)->update($empleados);
        $empleados=empleados::findOrFail($id);
        return view('empleados.edit',compact('empleados'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleados $empleados)
    {
        //
    }
}
