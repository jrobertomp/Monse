<meta charset="8">
<!DOCTYPE html>
<html>
<head>
	<body>
	<link rel="stylesheet" type="text/css" href="css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consultar registros</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="estilosmenu.css">
	<link rel="stylesheet" type="text/css" href="estilostablas.css">
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
<center>
	<?php
$con=mysqli_connect("localhost","root", "","smartfit");//se crea la conexion al servidor 
$resultado=mysqli_query($con,"select*from registros");//consultamos el contenido de la tabla de clientes
if($resultado===FALSE){
	echo"fallo";
	die(mysqli_error());//muestra el error que ocurrio
}
echo"<center><font face=`arial`>";
echo "<a href='Consulta_registros.php'> Actualizar tabla</a>";
echo "<h1>Consulta de la tabla registros</h1>";
echo "<table border='1'>
<tr>
<th>Registro</th>
<th> Nombre</th>
<th> Apellido</th>
<th>Telefono</th>
<th>Direccion</th>
<th> Correo</th>
<th> Edad</th>
<th> Enfermedades</th>
<th> Tipo de sangre</th>
</tr>";
while ($row=mysqli_fetch_array($resultado))//muestra el contenido de cada alumno

{
	echo "<tr>";
	echo "<td align=center>".$row['Id_Registro']."</td>";
    echo "<td>".$row['Nombre']."</td>";
    echo "<td>" .$row['Apellido']."</td>";
     echo "<td>" .$row['Num_Telefono']."</td>";
     echo "<td>" .$row['Direccion']."</td>";
          echo "<td>" .$row['Correo']."</td>";
          echo "<td>" .$row['Edad']."</td>";
          echo "<td>" .$row['Enfermedades']."</td>";
    echo"<td align=center>" .$row['Tipo_Sangre']."</td>";
    echo "</tr>" ;
}
        echo "</table>";
        $registros=mysqli_num_rows($resultado);
        echo"<br>Registros:".$registros;
mysqli_close($con);//cerramos la conexion a la BD
?>
</center></body></html>