@extends('layouts.plantillabase')

@section('contenido')


<div class="container">


<form action="/registros/{{$registro->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
    <label for="" class="form-label">Jefe de Estudios Profecionales</label>
    <input id="jefeestudios" name="jefeestudios" type="text" class="form-control" tabindex="1" value="{{$registro->jefeestudios}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" tabindex="2" value="{{$registro->fecha}}">    
  </div>

  <div class="form-group">
    <label for="opcion">Opcion de Titulación</label>

  <select name = "opciontitulacion" value="{{$registro->opciontitulacion}}" >

    <optgroup label="Proyecto Plan 2009-2010">

      <option>Informe técnico de residencia profesional</option>

      <option> Proyecto de innovación  tecnológica     </option>

      <option>Proyecto de investigación</option>

      <option>Informe de estancia</option>

      <option> Tesis</option>

      <option> Tesina</option>

      <option>Entre otros proyectos (Ver definición en Lineamiento)</option>

      <option>Examen General De Egreso de Licenciatura (CENEVAL) </option>

    </optgroup>
    <optgroup label="Proyecto Plan 2015">

      <option>Residencia Profesional </option>

      <option>Proyecto de investigación y/o Desarrollo Tecnológico</option>

      <option>Proyecto Integrador</option>

      <option>Proyecto Productivo</option>

      <option>Proyecto de Innovación Tecnológica</option>

      <option>Proyecto de Emprendedurismo</option>

      <option>Proyecto Integral de Educación Dual</option>

      <option>Estancia</option>

      <option>Tesis</option>

      <option>Tesina</option>

      <option>Examen General de Egreso de Licenciatura  </option>

    </optgroup>
  </select>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre del proyecto</label>
    <input id="nombreproyecto" name="nombreproyecto" type="text" class="form-control" tabindex="4" value="{{$registro->nombreproyecto}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre del Director del Proyecto</label>
    <input id="directorproyecto" name="directorproyecto" type="text" class="form-control" tabindex="4" value="{{$registro->directorproyecto}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre del CoDirector del Proyecto</label>
    <input id="codirectorproyecto" name="codirectorproyecto" type="text" class="form-control" tabindex="4" value="{{$registro->codirectorproyecto}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Numero de Estudiantes</label>
    <input id="numeroestudiantes" name="numeroestudiantes" value="1" min="1" max="2" type="number" class="form-control" tabindex="4" value="{{$registro->numeroestudiantes}}">
  </div>

  <div class="mb-3">
        <label for="DatosEstudiantes">Datos del (de los) estudiante(s): </label>
        <table class="DatosEstudiantes">
  <thead>
  <tr>

    <th>Nombre</th>

    <th>Numero de Control</th>

    <th>Carrera</th>

  </tr>
</thead>
<tbody>
  <tr>

    <td><input type="text" name="nombreestudiante" placeholder = "Nombre "  value="{{$registro->nombreestudiante}}"/></td>

    <td> <input type="text" name="numerocontrol" placeholder = "Número de Control"   value="{{$registro->numerocontrol}}"/></td>

    <td><input type="text" name="carreraestudiante" placeholder = "Carrera "  value="{{$registro->carreraestudiante}}"/></td>

  </tr>

  <tr>

    <td><input type="text" name="nombreestudiante2" placeholder = "Nombre " value="{{$registro->nombreestudiante2}}"/></td>

    <td><input type="text" name="numerocontrol2" placeholder = "Número de Control " value="{{$registro->numerocontrol2}}"/></td>

    <td> <input type="text" name="carreraestudiante2" placeholder = "Carrera "  value="{{$registro->carreraestudiante2}}"/></td>

  </tr>
     </tbody>
    </table>
        </div>

        <div class="mb-3">
        <textarea name="observaciones" rows="5" cols="70" value="{{$registro->observaciones}}"> Observaciones: </textarea>
        </div>
        
        <div class="mb-3">
    <label for="" class="form-label">Firma del Jefe de Carrera</label>
    <input id="firmajefecarrera" name="firmajefecarrera" type="text" class="form-control" tabindex="4" value="{{$registro->firmajefecarrera}}">
  </div>

  <a href="/registros" class="btn btn-secondary" tabindex="13">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="14">Guardar</button>

  </div>
</form>


@endsection