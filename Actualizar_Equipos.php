<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilosmenu.css">
<link rel="stylesheet" type="text/css" href="estilostablas.css">
<meta charset="utf-8"/>
<style type="text/css"></style>
</head>
<body>
    <center>
<br>
<img src="smartlogo.png" width="270px" height="100px" >
</center>
<br>
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
$resultado = mysqli_query($con,"select * from equipos");//consultamos el contenido de la tabla articulos
if($resultado === FALSE){
echo "fallo";
die(mysqli_error());// Muestra el error que ocurrió 
} 
echo "<center>";
echo "<h1>Actualizar Equipos</h1>";
echo "<table >
 <tr>
<th>Numero_Equipo</th>
<th>Nombre</th>
</tr>";
while($row=mysqli_fetch_array($resultado)) //Muestra el contenido de la articulos
{
echo "<tr>";
echo "<td>".$row['Id_Numero_Equipo']."</td>";
echo "<td>".$row['Nombre']."</td>";
echo "</tr>";
}
echo "</table>";
$registros=mysqli_num_rows($resultado);
echo"<br>El numero de registros son:".$registros;
mysqli_close($con); //cerramos la conexión a la BD
?>
<h3>Escribe la  del Registro a editar</h3> 
<form action="Actualizar_Equipos2.php" method="post">
Matricula: <input type="text" name="id" />
<input type="submit" value="Editar"/>
</form>
</body>
</html>