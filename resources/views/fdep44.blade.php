<html>
<head>
<meta charset="utf-8" />
<title>F-DEP 44</title>

<style>
body {
  font-family: Arial;
  font-size: 12pt;
  margin: 40px;
}
</style>
 
</head>
<center><img src="{{ public_path('img/alto44.png')}}" alt="BTS"></center>
<body>

<p align="right">Fecha: {{$solicitudes->fecha}}</p>


<p>{{$solicitudes->jefeestudios}} <br>
<strong>Jefatura del Departamento de Estudios Profesionales</strong><br>
<strong>PRESENTE</strong></p>

<p align="right"><strong>At´n:</strong> {{$solicitudes->jefecarrera}} </p>

<p align="right"><strong>Jefatura de Carrera o<br>
Coordinador (a) de Maestría (Nombre la Maestría):</strong> {{$solicitudes->carreramaestria}} </p>

<p>Por medio del presente solicito autorización para iniciar trámite de registro de la opción de titulación:</p>


      <table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd;">

          <tr>
            <th>Nombre:</th>
            <td>{{$solicitudes->nombreestudiante}}</td>

          </tr>
          <tr>
            <th>Carrera:</th>
            <td>{{$solicitudes->carreraestudiante}}</td>
          
            
          </tr>
          <tr>
            <th>No. Control:</th>
            <td>{{$solicitudes->numerocontrol}}</td>
          </tr>

          <tr>
            <th >Nombre del proyecto:</th>
            <td>{{$solicitudes->nombreproyecto}}</td>
          </tr>

          <tr>
            <th>Opcion de Titulación</th>
            <td>{{$solicitudes->opciontitulacion}}</td>
          </tr>
        </table>

      <p>En espera de la aceptación de esta solicitud, quedo a sus órdenes.</p><br>
       <center><strong><p>A T E N T A M E N T E</p></strong></center><br>

       <center><p>________________________________<br>
                 {{$solicitudes->firmaestudiante}}<br>
             <strong><p>Nombre y Firma</p></strong></center>

				
   <table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd;">
          <tr>
            <th>Teléfono particular o de contacto: </th>
            <td>{{$solicitudes->telefono}}</td>

          </tr>
          <tr>
            <th>Correo electrónico del estudiante: </th>
            <td>{{$solicitudes->correo}}</td>
        </table> 

        <body><br><br><br>
        <img src="{{ public_path('img/bajo44.png')}}" alt="BTS">
   </html>


 


  

