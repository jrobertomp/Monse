<meta charset="8">
<!DOCTYPE html>
<html>
<head>
	<body>
	<link rel="stylesheet" type="text/css" href="estilostablas.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilosmenu.css">
	<br>
<ul>
<li><a href="menu.html">Inicio</a></li>
<li class="Paginas">
<a href="javascript:void(0)" class="despliegue">GYM</a>
<div class="Opciones">
<a href="GYM.html">Gimnacio</a>
</div>
 
<li class="Paginas">
<a href="javascript:void(0)" class="despliegue">Clientes</a>
<div class="Opciones">
<a href="Insertar_Datos_Clientes.html">Insertar Clientes</a>
<a href="Actualizar_Clientes.php">Actualizar Clientes</a>
<a href="Borrar_Clientes.html">Borrar Clientes</a>
</div>
 
<li class="Paginas">
<a href="javascript:void(0)" class="despliegue">Registro </a>
<div class="Opciones">
<a href="insertar_registros.html">Insertar Registro</a>
<a href="Actualizar_Registro.php">Actualizar Registro</a>
<a href="Borrar_Registro.html">Borrar Registro</a>
</div>

<li class="Paginas">
<a href="javascript:void(0)" class="despliegue">Equipos </a>
<div class="Opciones">
<a href="Insertar_Datos_Equipos.html">Insertar Equipos</a>
<a href="Actualizar_Equipos.php">Actualizar Equipos</a>
<a href="Borrar_Equipos.html ">Borrar Equipos</a>
</div>
</li>
</ul>
	<title>Consultar Clientes</title>
</head>
<body>
<center>
	<?php
$con=mysqli_connect("localhost","root", "","smartfit");//se crea la conexion al servidor 
$resultado=mysqli_query($con,"select*from clientes");//consultamos el contenido de la tabla de clientes
if($resultado===FALSE){
	echo"fallo";
	die(mysqli_error());//muestra el error que ocurrio
}
echo"<center><font face=`arial`>";
echo "<a href='Consulta_Clientes.php'> Actualizar tabla</a>";
echo "<h1>Consulta de la tabla Clientes</h1>";
echo "<table border='1'>
<tr>
<th>Matricula</th>
<th> Nombre</th>
<th>Telefono</th>
<th>Mensualidades</th>
</tr>";
while ($row=mysqli_fetch_array($resultado))//muestra el contenido de cada alumno

{
	echo "<tr>";
	echo "<td align=center>".$row['Id_Matricula']."</td>";
    echo "<td>".$row['Nombre']."</td>";
    echo "<td>" .$row['Telefono']."</td>";
    echo"<td align=center>" .$row['Mensualidades']."</td>";
    echo "</tr>" ;
}
        echo "</table>";
        $registros=mysqli_num_rows($resultado);
        echo"<br>Registros:".$registros;
mysqli_close($con);//cerramos la conexion a la BD
?>
</center></body></html>