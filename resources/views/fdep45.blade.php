<html>
<head>
<meta charset="utf-8" />
<title>F-DEP 45</title>

<style>
body {
  font-family: Arial;
  font-size: 12pt;
  margin: 40px;
}
</style>
 
</head>
<center><img src="{{ public_path('img/alto45.png')}}" alt="BTS"></center>
<body>

<p align="right">Asunto: Registro de la opción para Titulación </p>

<p>{{$registro->jefeestudios}}<br>
<strong>Jefatura del Departamento de Estudios Profesionales</strong><br>
<strong>PRESENTE</strong></p>

<p align="right">Fecha: {{$registro->fecha}}</p>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd;">

          <tr>
            <th>Opción de Titulación:</th>
            <td>{{$registro->opciontitulacion}}</td>

          </tr>
          <tr>
            <th>Nombre del proyecto: </th>
            <td>{{$registro->nombreproyecto}}</td>
          
            
          </tr>
          <tr>
            <th>Nombre del (de la) Director(a) del proyecto</th>
            <td>{{$registro->directorproyecto}}</td>
          </tr>

          <tr>
            <th >Nombre del (de la) Codirector(a) del proyecto</th>
            <td>{{$registro->codirectorproyecto}}</td>
          </tr>

          <tr>
            <th>Número de estudiantes: </th>
            <td>{{$registro->numeroestudiantes}}</td>
          </tr>
        </table><br>
       <p> Datos del (de los) estudiante(s): </p>
       <table  width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd;">
  <thead>
  <tr>

    <th>Nombre</th>

    <th>No. Control</th>

    <th>Carrera</th>

  </tr>
</thead>
<tbody>
  <tr>

    <td>{{$registro->nombreestudiante}}</td>

    <td>{{$registro->numerocontrol}} </td>

    <td>{{$registro->carreraestudiante}}</td>

  </tr>

  <tr>

    <td>{{$registro->nombreestudiante2}}</td>

    <td>{{$registro->numerocontrol2}}</td>

    <td>{{$registro->carreraestudiante2}}</td>

  </tr>
     </tbody>
    </table>
 <br>

 <textarea name="Observaciones" rows="5" cols="70">{{$registro->observaciones}}</p> </textarea>


  <center><strong><p>A T E N T A M E N T E</p></strong></center>

       <center><p>________________________________<br>
                  {{$registro->firmajefecarrera}}<br>
             <strong><p>Nombre y Firma<br>
                   Jefatura de Carrera o <br>
      Coordinador (a) de Maestría (Nombre de Maestría</p></strong></center>
  C.c.p.- Expediente.
  <body>
  <center><img src="{{ public_path('img/bajo45.png')}}" alt="BTS"> </center>
  </html>


 





    





   


