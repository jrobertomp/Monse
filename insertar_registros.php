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
$con = mysqli_connect("localhost","root","","smartfit");
if (!$con) 
{
	die('No se establecio conexion exitosa con el servidor.'. mysqli_error());
}
$sql="INSERT INTO registros
VALUES('$_POST[Id_Registro]','$_POST[Nombre]', '$_POST[Apellido]','$_POST[Num_Telefono]', '$_POST[Direccion]', '$_POST[Correo]', '$_POST[Edad]', '$_POST[Enfermedades]', '$_POST[Tipo_Sangre]')";
if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
{
	die('Error. ' .mysqli_error($con));
}
echo "<center>";
echo "1 registro agregado <br>";
echo "<a href='Consulta_registros.php'>Ver registros</a>";
mysqli_close($con);
?>