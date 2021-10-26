<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all();
        return view ('registro.index')-> with('registros',$registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('registro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $registros = new Registro();

        $registros->jefeestudios = $request->get('jefeestudios');
        $registros->fecha = $request->get('fecha');
        $registros->opciontitulacion  = $request->get('opciontitulacion');
        $registros->nombreproyecto = $request->get('nombreproyecto');
        $registros->directorproyecto = $request->get('directorproyecto');
        $registros->codirectorproyecto = $request->get('codirectorproyecto');
        $registros->numeroestudiantes = $request->get('numeroestudiantes');
        $registros->nombreestudiante = $request->get('nombreestudiante');
        $registros->numerocontrol = $request->get('numerocontrol');
        $registros->carreraestudiante = $request->get('carreraestudiante');
        $registros->nombreestudiante2 = $request->get('nombreestudiante2');
        $registros->numerocontrol2= $request->get('numerocontrol2');
        $registros->carreraestudiante2 = $request->get('carreraestudiante2');
        $registros->observaciones = $request->get('observaciones');
        $registros->firmajefecarrera = $request->get('firmajefecarrera');

        $registros->save();

        return redirect('/registros');


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
        $registro = Registro::find($id);
        return view('registro.edit')-> with('registro',$registro);
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
         
        $registro = Registro::find($id);

        $registro->jefeestudios = $request->get('jefeestudios');
        $registro->fecha = $request->get('fecha');
        $registro->opciontitulacion  = $request->get('opciontitulacion');
        $registro->nombreproyecto = $request->get('nombreproyecto');
        $registro->directorproyecto = $request->get('directorproyecto');
        $registro->codirectorproyecto = $request->get('codirectorproyecto');
        $registro->numeroestudiantes = $request->get('numeroestudiantes');
        $registro->nombreestudiante = $request->get('nombreestudiante');
        $registro->numerocontrol = $request->get('numerocontrol');
        $registro->carreraestudiante = $request->get('carreraestudiante');
        $registro->nombreestudiante2 = $request->get('nombreestudiante2');
        $registro->numerocontrol2= $request->get('numerocontrol2');
        $registro->carreraestudiante2 = $request->get('carreraestudiante2');
        $registro->observaciones = $request->get('observaciones');
        $registro->firmajefecarrera = $request->get('firmajefecarrera');

        $registro->save();

        return redirect('/registros');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Registro::find($id);        
        $registro->delete();

        return redirect('/registros');
    }
}
