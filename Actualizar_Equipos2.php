<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css2.css">
<meta charset="utf-8"/>
<style type="text/css"></style>
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
<?php
$con = mysqli_connect ("localhost", "root","","smartfit");// se crea la conexión al servidor
$NUMERO=$_POST['id']; //clave del registro seleccionado
$resultado = mysqli_query ($con, "select * from equipos where Id_Numero_Equipo = $NUMERO"); //consultamos el contenido de la tabla articulos
if($resultado === FALSE) {
	echo "fallo ";
die (mysqli_error()); // Muestra el error que ocurrió echo"<center>".
}
echo "<form action=Actualizar_Equipos3.php method=POST>";
echo "<h1>Editar Equipos</h1>";
echo "<table border='0'>";
while($row=mysqli_fetch_array($resultado)) //Muestra el contenido del registro a editar
{
echo "<tr>";
echo "<td>Numero_Equipo:</td>"; echo "<td><input type='text' name='Id' value=". $row['Id_Numero_Equipo']."></td></tr>";
echo "<tr>";
echo "<td>Nombre:</td>"; echo "<td><input type='text' name='Nombre' value=". $row['Nombre']."></td></tr>";
echo "<tr>";
}
echo "</table>";
mysqli_close($con);
echo "<input type=submit value=Acualizar Equipos/>";
echo "</form>";
?>
</body>
</html>