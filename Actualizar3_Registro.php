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
$con = mysqli_connect("localhost", "root","", "smartfit");// se crea la conexión al servidor
if(!$con) {
     echo "fallo ";
  die (mysqli_error($con));
  } // Muestra el error que ocurrió
$ID=$_POST['Id']; // recibe los nuevos datos del registro
$NOMBRE=$_POST['Nombre'];
$APELLIDO=$_POST['Apellido'];
$NUM_TELEFONO=$_POST['Num_Telefono'];
$DIRECCION=$_POST['Direccion'];
$CORREO=$_POST['Correo'];
$EDAD=$_POST['Edad'];
$ENFERMEDADES=$_POST['Enfermedades'];
$TIPO_SANGRE=$_POST['Tipo_Sangre'];
mysqli_query($con, "UPDATE registros
SET Id_Registro='$ID', Nombre='$NOMBRE', Apellido='APELLIDO' Num_Telefono='$NUM_TELEFONO', Direccion='$DIRECCION', Correo='CORREO', Edad='EDAD', Enfermedades='ENFERMEDADES', Tipo_Sangfre='TIPO_SANGRE' 
WHERE Id_Registro='$ID'"); // actualiza los clientes del registro
header("Location:Actualizar_Registro.php"); // redirecciona a la primera página de Actualizar articulos 
mysqli_close($con); //cerramos la conexión a la BD 
?>