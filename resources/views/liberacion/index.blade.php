@extends('layouts.plantillabase')

@section('css')
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="styles">
@endsection

@section('contenido')
<a href="/inicio" class="btn btn-primary mb-3">INICIO</a>
<a href="liberaciones/create" class="btn btn-primary mb-3">CREAR LIBERACIÓN F-DEP 46</a>

<table id="liberaciones" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fecha</th>
      <th scope="col">Jefe de Estudios Profecionales</th>
      <th scope="col">Nombre del Estudiante</th>
      <th scope="col">Carrera del Estudiante</th>
      <th scope="col">Numero de Control</th>
      <th scope="col">Nombre del proyecto</th>
      <th scope="col">Opcion de Titulacion</th>
      <th scope="col">Firma Jefe de Carrera</th>
      <th scope="col">Nombre del Presidente</th>
      <th scope="col">Nombre del Secretario</th>
      <th scope="col">Nombre del Vocal</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody> 
   @foreach ($liberaciones as $liberacion)
    <tr>
        <td>{{$liberacion->id}}</td>
        <td>{{$liberacion->fecha}}</td>
        <td>{{$liberacion->jefeestudios}}</td>
        <td>{{$liberacion->nombreestudiante}}</td>
        <td>{{$liberacion->carreraestudiante}}</td>
        <td>{{$liberacion->numerocontrol}}</td>
        <td>{{$liberacion->nombreproyecto}}</td>
        <td>{{$liberacion->opciontitulacion}}</td>
        <td>{{$liberacion->firmajefecarrera}}</td>
        <td>{{$liberacion->nombrepresidente}}</td>
        <td>{{$liberacion->nombresecretario}}</td>
        <td>{{$liberacion->nombrevocal}}</td>

        <td>
        <form action="{{ route('liberaciones.destroy',$liberacion->id) }}" method="POST">
        <a href="{{url('pdf46/' . $liberacion->id ) }} " class = "btn btn-success">PDF</a>  
        <a href="/liberaciones/{{$liberacion->id}}/edit" class ="btn btn-info">Editar</a>
          @csrf
          @method('DELETE')
        <button type="submit" class="btn btn-danger">Borrar</a>
        </form> 
        </td>
    </tr>
    @endforeach
 </tbody> 
</table>

@section('js')

<script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
<script src = "https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js "></script>
<script src = "https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js "></script>

<script>
$(document).ready(function() {
    $('#liberaciones').DataTable({
        "lengthMenu": [[5,10,15,50, -1], [5,10,15,50, "All"]]
    });
} );
</script>

@endsection


@endsection