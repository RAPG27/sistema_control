<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liberacion;

class LiberacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liberaciones = Liberacion::all();
        return view ('liberacion.index')-> with('liberaciones',$liberaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('liberacion.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $liberaciones = new Liberacion();

        $liberaciones->fecha = $request->get('fecha');
        $liberaciones->jefeestudios = $request->get('jefeestudios');
        $liberaciones->nombreestudiante = $request->get('nombreestudiante');
        $liberaciones->carreraestudiante = $request->get('carreraestudiante');
        $liberaciones->numerocontrol = $request->get('numerocontrol');
        $liberaciones->nombreproyecto = $request->get('nombreproyecto');
        $liberaciones->opciontitulacion = $request->get('opciontitulacion');
        $liberaciones->firmajefecarrera = $request->get('firmajefecarrera');
        $liberaciones->nombrepresidente = $request->get('nombrepresidente');
        $liberaciones->nombresecretario = $request->get('nombresecretario');
        $liberaciones->nombrevocal = $request->get('nombrevocal'); 
        
        $liberaciones->save();

        return redirect('/liberaciones');




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
        

        $liberacion = Liberacion::find($id);
        return view ('liberacion.edit')-> with('liberacion',$liberacion);

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
        
        $liberacion = Liberacion::find($id);

        $liberacion->fecha = $request->get('fecha');
        $liberacion->jefeestudios = $request->get('jefeestudios');
        $liberacion->nombreestudiante = $request->get('nombreestudiante');
        $liberacion->carreraestudiante = $request->get('carreraestudiante');
        $liberacion->numerocontrol = $request->get('numerocontrol');
        $liberacion->nombreproyecto = $request->get('nombreproyecto');
        $liberacion->opciontitulacion = $request->get('opciontitulacion');
        $liberacion->firmajefecarrera = $request->get('firmajefecarrera');
        $liberacion->nombrepresidente = $request->get('nombrepresidente');
        $liberacion->nombresecretario = $request->get('nombresecretario');
        $liberacion->nombrevocal = $request->get('nombrevocal'); 
        
        $liberacion->save();

        return redirect('/liberaciones');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $liberacion = Liberacion::find($id);        
        $liberacion->delete();

        return redirect('/liberaciones');

    }
}
