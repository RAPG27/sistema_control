@extends('layouts.plantillabase')

@section('contenido')

<div class="container">
<center><h2>F-DEP-46 Formato de Liberación del Proyecto  para TItulación </h2></center>

<form action="/liberaciones" method="POST">
    @csrf

  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" tabindex="1" required>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Jefe de Estudios Profecionales</label>
    <input id="jefeestudios" name="jefeestudios" type="text" class="form-control" tabindex="2" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre del Estudiante</label>
    <input id="nombreestudiante" name="nombreestudiante" type="text" class="form-control" tabindex="5" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Carrera del Estudiante</label>
    <input id="carreraestudiante" name="carreraestudiante" type="text" class="form-control" tabindex="6" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Numero de Control</label>
    <input id="numerocontrol" name="numerocontrol" type="text" class="form-control" tabindex="7" required>
  </div>

  
  <div class="mb-3">
    <label for="" class="form-label">Nombre del proyecto</label>
    <input id="nombreproyecto" name="nombreproyecto" type="text" class="form-control" tabindex="8" required>
  </div>


  
  <div class="form-group">
    <label for="opcion">Opcion de Titulación</label>

  <select name = "opciontitulacion" required>

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
    <label for="" class="form-label">Firma del Jefe de Carrera</label>
    <input id="firmajefecarrera" name="firmajefecarrera" type="text" class="form-control" tabindex="10" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">   Nombre del Presidente</label>
    <input id="nombrepresidente" name="nombrepresidente" type="text" class="form-control" tabindex="11" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre del Secretario</label>
    <input id="nombresecretario" name="nombresecretario" type="text" class="form-control" tabindex="12" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre del vocal</label>
    <input id="nombrevocal" name="nombrevocal" type="text" class="form-control" tabindex="12" required>
  </div>

  <a href="/liberaciones" class="btn btn-secondary" tabindex="13">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="14">Guardar</button>

  </div>
</form>



@endsection