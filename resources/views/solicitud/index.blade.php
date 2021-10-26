@extends('layouts.plantillabase')

@section('css')
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="styles">
@endsection


@section('contenido')

<a href="/inicio" class="btn btn-primary mb-3">INICIO</a>
<a href="solicitudes/create" class="btn btn-primary mb-3">CREAR SOLICITUD F-DEP 44</a> 

<table id="solicitudes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fecha</th>
      <th scope="col">Jefe de Estudios Profecionales</th>
      <th scope="col">Jefe de Carrera</th>
      <th scope="col">Carrera o Maestria</th>
      <th scope="col">Nombre del Estudiante</th>
      <th scope="col">Carrera del Estudiante</th>
      <th scope="col">Numero de Control</th>
      <th scope="col">Nombre del proyecto</th>
      <th scope="col">Opcion de Titulacion</th>
      <th scope="col">Firma del Estudiante</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($solicitudes as $solicitud)
    <tr>
        <td>{{$solicitud->id}}</td>
        <td>{{$solicitud->fecha}}</td>
        <td>{{$solicitud->jefeestudios}}</td>
        <td>{{$solicitud->jefecarrera}}</td>
        <td>{{$solicitud->carreramaestria}}</td>
        <td>{{$solicitud->nombreestudiante}}</td>
        <td>{{$solicitud->carreraestudiante}}</td>
        <td>{{$solicitud->numerocontrol}}</td>
        <td>{{$solicitud->nombreproyecto}}</td>
        <td>{{$solicitud->opciontitulacion}}</td>
        <td>{{$solicitud->firmaestudiante}}</td>
        <td>{{$solicitud->telefono}}</td>
        <td>{{$solicitud->correo}}</td>

        <td>
        <form action="{{ route('solicitudes.destroy',$solicitud->id) }}" method="POST">
          <a href="{{url('pdf44/' . $solicitud->id ) }} " class = "btn btn-success">PDF</a>  
          <a href="/solicitudes/{{$solicitud->id}}/edit"  class ="btn btn-info">Editar</a>
        
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
    $('#solicitudes').DataTable({
        "lengthMenu": [[5,10,15,50, -1], [5,10,15,50, "All"]]
    });
} );
</script>

@endsection


@endsection