<html>
<head>
<meta charset="utf-8" />
<title>F-DEP 45</title>

<style>
body {
  font-family: Arial;
  font-size: 12pt;
  margin-left:   30px;
  margin-right:  30px
}
</style>
 
</head>
<center><img src="{{ public_path('img/alto46.png')}}" alt="BTS"></center>
<body>

<p align="right">Fecha: {{$liberacion->fecha}}</p>

<p align="right">Asunto: Liberación de la opción de Titulación</p>

<p>{{$liberacion->jefeestudios}}<br>
<strong>Jefatura del Departamento de Estudios Profesionales</strong><br>
<strong>PRESENTE</strong></p>

<p>Por este medio informo que ha sido liberado la siguiente opción de titulación:</p>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd;">

<tr>
  <th>Nombre del estudiante y/o egresado: </th>
  <td>{{$liberacion->nombreestudiante}}</td>

</tr>
<tr>
  <th>Carrera:</th>
  <td>{{$liberacion->carreraestudiante}}</td>

  
</tr>
<tr>
  <th>No. de control: </th>
  <td>{{$liberacion->numerocontrol}}</td>
</tr>

<tr>
  <th >Nombre del proyecto:</th>
  <td>{{$liberacion->nombreproyecto}}</td>
</tr>

<tr>
  <th>Opcion de Titulación: </th>
  <td>{{$liberacion->opciontitulacion}}</td>
</tr>
</table>

<p> Agradezco de antemano su valioso apoyo en esta importante actividad para la 
formación profesional de nuestros egresados.</p>

<center><strong><p>A T E N T A M E N T E</p></strong></center>

<center><p>________________________________<br>
           {{$liberacion->firmajefecarrera}}<br>
             <strong><p>Nombre y Firma<br>
Jefatura de Carrera o Coordinador (a) de Maestría ( Nombre de Maestría) </p></strong></center>

<center>Asignación de sinodales</center>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd;">

    <tr>
  
      <td>{{$liberacion->nombrepresidente}}</td>
  
      <td>{{$liberacion->nombresecretario}}</td>
  
      <td>{{$liberacion->nombrevocal}}</td>
  
    </tr>
    <tr>
  
      <th>Nombre y firma del Presidente </th>
  
      <th>Nombre y firma del Secretario</th>
  
      <th>Nombre y firma del Vocal</th>
  
    </tr>
  </table>
  *Nota: Para el caso de tesis o tesina, el secretario y el vocal son revisores del proyecto integral de titulación.<br><br><br><br>
  C.c.p.- Expediente.

  <body>
  <center><img src="{{ public_path('img/bajo46.png')}}" alt="BTS"> </center>
  </html>


 




