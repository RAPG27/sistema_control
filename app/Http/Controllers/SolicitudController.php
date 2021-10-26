<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitud;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitud::all();
        return view('solicitud.index')-> with('solicitudes',$solicitudes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitudes = new Solicitud();
        $solicitudes->fecha = $request->get('fecha');
        $solicitudes->jefeestudios = $request->get('jefeestudios');
        $solicitudes->jefecarrera = $request->get('jefecarrera');
        $solicitudes->carreramaestria = $request->get('carreramaestria');
        $solicitudes->nombreestudiante = $request->get('nombreestudiante');
        $solicitudes->carreraestudiante  = $request->get('carreraestudiante');
        $solicitudes->numerocontrol = $request->get('numerocontrol');
        $solicitudes->nombreproyecto = $request->get('nombreproyecto');
        $solicitudes->opciontitulacion  = $request->get('opciontitulacion');
        $solicitudes->firmaestudiante = $request->get('firmaestudiante');
        $solicitudes->telefono = $request->get('telefono');
        $solicitudes->correo = $request->get('correo');

        $solicitudes->save();

        return redirect('/solicitudes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //$solicitudes = Solicitud::find($id);

         //$vista = view('fdep44') ->with('solicitudes', $solicitudes);

        //$pdf = \PDF::loadView($vista);
         //return  $pdf->stream('fdep44.pdf');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitud = Solicitud::find($id);
        return view('solicitud.edit')-> with('solicitud',$solicitud);
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
        
        $solicitud= Solicitud::find($id);

        $solicitud->fecha = $request->get('fecha');
        $solicitud->jefeestudios = $request->get('jefeestudios');
        $solicitud->jefecarrera = $request->get('jefecarrera');
        $solicitud->carreramaestria = $request->get('carreramaestria');
        $solicitud->nombreestudiante = $request->get('nombreestudiante');
        $solicitud->carreraestudiante  = $request->get('carreraestudiante');
        $solicitud->numerocontrol = $request->get('numerocontrol');
        $solicitud->nombreproyecto = $request->get('nombreproyecto');
        $solicitud->opciontitulacion  = $request->get('opciontitulacion');
        $solicitud->firmaestudiante = $request->get('firmaestudiante');
        $solicitud->telefono = $request->get('telefono');
        $solicitud->correo = $request->get('correo');

        $solicitud->save();

        return redirect('/solicitudes');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $solicitud = Solicitud::find($id);        
        $solicitud->delete();

        return redirect('/solicitudes');

    }
}
