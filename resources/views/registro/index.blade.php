@extends('layouts.plantillabase')

@section('css')
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="styles">
@endsection

@section('contenido')
<a href="/inicio" class="btn btn-primary mb-3">INICIO</a>
<a href="registros/create" class="btn btn-primary mb-3">CREAR REGISTRO F-DEP 45</a>


<table id="registros" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Jefe de Estudios Profecionales</th>
      <th scope="col">Fecha</th>
      <th scope="col">Opcion de Titulacion</th>
      <th scope="col">Nombre del proyecto</th>
      <th scope="col">Nombre del Director</th>
      <th scope="col">Nombre del CoDirector</th>
      <th scope="col">Numero de Estudiantes</th>
      <th scope="col">Nombre del Estudiante</th>
      <th scope="col">Numero de Control</th>
      <th scope="col">Carrera del Estudiante</th>
      <th scope="col">Nombre del Estudiante 2</th>
      <th scope="col">Numero de Control 2</th>
      <th scope="col">Carrera del Estudiante 2</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Firma Jefe de Carrera</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($registros as $registro)
    <tr>
        <td>{{$registro->id}}</td>
        <td>{{$registro->jefeestudios}}</td>
        <td>{{$registro->fecha}}</td>
        <td>{{$registro->opciontitulacion}}</td>
        <td>{{$registro->nombreproyecto}}</td>
        <td>{{$registro->directorproyecto}}</td>
        <td>{{$registro->codirectorproyecto}}</td>
        <td>{{$registro->numeroestudiantes}}</td>
        <td>{{$registro->nombreestudiante}}</td>
        <td>{{$registro->numerocontrol}}</td>
        <td>{{$registro->carreraestudiante}}</td>
        <td>{{$registro->nombreestudiante2}}</td>
        <td>{{$registro->numerocontrol2}}</td>
        <td>{{$registro->carreraestudiante2}}</td>
        <td>{{$registro->observaciones}}</td>
        <td>{{$registro->firmajefecarrera}}</td>

        <td>  
        <form action="{{ route('registros.destroy',$registro->id) }}" method="POST">
        <a  href="{{url('pdf45/' . $registro->id ) }} " class = "btn btn-success">PDF</a> 
           <a href="/registros/{{$registro->id}}/edit" class = "btn btn-info"> Editar</a>
           @csrf
          @method('DELETE')
           <button class = "btn btn-danger">Borrar</a>
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
    $('#registros').DataTable({
        "lengthMenu": [[5,10,15,50, -1], [5,10,15,50, "All"]]
    });
} );
</script>

@endsection

@endsection