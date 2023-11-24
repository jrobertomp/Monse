<!DOCTYPE html>
<html>
<head>
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
</ul><meta charset="utf-8"/>
<style type="text/css"></style>
</head>
<body>
<?php
$con = mysqli_connect ("localhost", "root","","smartfit");// se crea la conexión al servidor
$REGISTRO=$_POST['id']; //clave del registro seleccionado
$resultado = mysqli_query ($con, "select * from clientes where Id_Registro = $REGISTRO"); //consultamos el contenido de la tabla articulos
if($resultado === FALSE) {
	echo "fallo ";
die (mysqli_error()); // Muestra el error que ocurrió echo"<center>".
}
echo "<form action=Actualizar3_Registro.php method=POST>";
echo "<h1>Editar Registros</h1>";
echo "<table border='0'>";
while($row=mysqli_fetch_array($resultado)) //Muestra el contenido del registro a editar
{
echo "<tr>";
echo "<td>Registro:</td>"; echo "<td><input type='text' name='Id' value=". $row['Id_Registro']."></td></tr>";
echo "<tr>";
echo "<td>Nombre:</td>"; echo "<td><input type='text' name='Nombre' value=". $row['Nombre']."></td></tr>";
echo "<tr>";
echo "<td>Apellido:</td>"; echo "<td><input type='text' name='Apellido' value=". $row['Apellido']."></td></tr>";
echo "<tr>";

echo "<td>Telefono:</td>"; echo "<td><input type='text' name='Num' value=". $row['Num_TelefonoTelefono']."></td></tr>";
echo "<tr>";
echo "<td>Direccion:</td>"; echo "<td><input type='text' name='Direccion' value=". $row['Direccion']."></td></tr>";
echo "<tr>";
echo "<td>Correo:</td>"; echo "<td><input type='text' name='Correo' value=". $row['Correo']."></td></tr>";
echo "<tr>";
echo "<td>Edad:</td>"; echo "<td><input type='text' name='Edad' value=". $row['Edad']."></td></tr>";
echo "<tr>";
echo "<td>Enfermedades:</td>"; echo "<td><input type='text' name='Enfermedades' value=". $row['Enfermedades']."></td></tr>";
echo "<tr>";
echo "<td>Tipo de Sangre:</td>"; echo "<td><input type='text' name='Tipo de Sangre' value=". $row['Tipo_de_Sangre']."></td></tr>";
}
echo "</table>";
mysqli_close($con);
echo "<input type=submit value=Acualizar Registro/>";
echo "</form>";
?>
</body>
</html>