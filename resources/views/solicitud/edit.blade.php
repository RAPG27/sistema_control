@extends('layouts.plantillabase')

@section('contenido')

<div class="container">

<form action="/solicitudes/{{$solicitud->id}}" method="POST">
    @csrf
    @method('PUT')

  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" tabindex="1" value="{{$solicitud->fecha}}">    
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label">Jefe de Estudios Profecionales</label>
    <input id="jefeestudios" name="jefeestudios" type="text" class="form-control" tabindex="2" value="{{$solicitud->jefeestudios}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Jefe de Carrera</label>
    <input id="jefecarrera" name="jefecarrera" type="text" class="form-control" tabindex="3" value="{{$solicitud->jefecarrera}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Carrera o Maestria</label>
    <input id="carreramaestria" name="carreramaestria" type="text"  class="form-control" tabindex="4" value="{{$solicitud->carreramaestria}}">
  </div>
 
  <div class="mb-3">
    <label for="" class="form-label">Nombre del Estudiante</label>
    <input id="nombreestudiante" name="nombreestudiante" type="text" class="form-control" tabindex="5" value="{{$solicitud->nombreestudiante}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Carrera del Estudiante</label>
    <input id="carreraestudiante" name="carreraestudiante" type="text" class="form-control" tabindex="6" value="{{$solicitud->carreraestudiante}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Numero de Control</label>
    <input id="numerocontrol" name="numerocontrol" type="text" class="form-control" tabindex="7" value="{{$solicitud->numerocontrol}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre del proyecto</label>
    <input id="nombreproyecto" name="nombreproyecto" type="text" class="form-control" tabindex="8" value="{{$solicitud->nombreproyecto}}">
  </div>


  


  <div class="form-group">
    <label for="opcion">Opcion de Titulaci??n</label>

  <select name = "opciontitulacion" value="{{$solicitud->opciontitulacion}}" >

    <optgroup label="Proyecto Plan 2009-2010">

      <option>Informe t??cnico de residencia profesional</option>

      <option> Proyecto de innovaci??n  tecnol??gica     </option>

      <option>Proyecto de investigaci??n</option>

      <option>Informe de estancia</option>

      <option> Tesis</option>

      <option> Tesina</option>

      <option>Entre otros proyectos (Ver definici??n en Lineamiento)</option>

      <option>Examen General De Egreso de Licenciatura (CENEVAL) </option>

    </optgroup>
    <optgroup label="Proyecto Plan 2015">

      <option>Residencia Profesional </option>

      <option>Proyecto de investigaci??n y/o Desarrollo Tecnol??gico</option>

      <option>Proyecto Integrador</option>

      <option>Proyecto Productivo</option>

      <option>Proyecto de Innovaci??n Tecnol??gica</option>

      <option>Proyecto de Emprendedurismo</option>

      <option>Proyecto Integral de Educaci??n Dual</option>

      <option>Estancia</option>

      <option>Tesis</option>

      <option>Tesina</option>

      <option>Examen General de Egreso de Licenciatura  </option>

    </optgroup>
  </select>
  </div>



  <div class="mb-3">
    <label for="" class="form-label">Firma del Estudiante</label>
    <input id="firmaestudiante" name="firmaestudiante" type="text" class="form-control" tabindex="10" value="{{$solicitud->firmaestudiante}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" tabindex="11" value="{{$solicitud->telefono}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="correo" name="correo" type="text" class="form-control" tabindex="12" value="{{$solicitud->correo}}">
  </div>

  <a href="/solicitudes" class="btn btn-secondary" tabindex="13">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="14">Guardar</button>
  </div>
</form>








@endsection
