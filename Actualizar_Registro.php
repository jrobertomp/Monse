<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css"><!--especificamos el archivo CSS a
    ocupar-->
<meta charset="utf-8"/>
<style type="text/css"></style>
</head>
<body>
    <center>
<br>
<img src="smartlogo.png" width="270px" height="100px" >
</center>
<br>
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
$con = mysqli_connect("localhost","root","","smartfit");// se crea la conexión al servidor
$resultado = mysqli_query($con,"select * from registros");//consultamos el contenido de la tabla articulos
if($resultado === FALSE){
echo "fallo";
die(mysqli_error());// Muestra el error que ocurrió 
} 
echo "<center>";
echo "<h1>Actualizar Registro</h1>";
echo "<table>
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
while($row=mysqli_fetch_array($resultado)) //Muestra el contenido de la articulos
{
echo "<tr>";
echo "<td>".$row['Id_Registro']."</td>";
echo "<td>".$row['Nombre']."</td>";
echo "<td>".$row['Apellido']."</td>";
echo "<td>".$row['Num_Telefono']."</td>";
echo "<td>".$row['Direccion']."</td>";
echo "<td>".$row['Correo']."</td>";
echo "<td>".$row['Edad']."</td>";
echo "<td>".$row['Enfermedades']."</td>";
echo "<td>".$row['Tipo_Sangre']."</td>";
echo "</tr>";
}
echo "</table>";
$registros=mysqli_num_rows($resultado);
echo"<br>El numero de registros son:".$registros;
mysqli_close($con); //cerramos la conexión a la BD
?>
<h3>Escribe la  del Registro a editar</h3> 
<form action="Actualizar_Clientes2.php" method="post">
Matricula: <input type="text" name="id" />
<input type="submit" value="Editar"/>
</form>
</body>
</html>