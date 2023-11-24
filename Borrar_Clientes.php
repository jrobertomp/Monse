<HTML>
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
<?php
$con = mysqli_connect("localhost", "root",'', "smartfit"); //asignamos a una variable el resultado de la conexion
echo "<br><center>";
if (!$con) // checa el resultado de la conexion: TRUE o FALSE
{
die('No se estableció la conexión con el servidor:'. mysqli_error($con)); // FALSE en caso de falla
}
$sql="DELETE FROM Clientes WHERE Id_Matricula = '{$_POST["Id_Matricula"]}' ";
if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
{
die('Error: '.mysqli_error($con));
}echo "Registro borrado<br><br>";
echo "<a href='Borrar_Clientes.html'>Regresar</a>";// llamamos a consultas para ver el nuevo registro
mysqli_close($con);
?>