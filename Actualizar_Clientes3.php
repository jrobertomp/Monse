<?php
$con = mysqli_connect("localhost", "root","", "smartfit");// se crea la conexión al servidor
if(!$con) {
     echo "fallo ";
  die (mysqli_error($con));
  } // Muestra el error que ocurrió
$ID=$_POST['Id']; // recibe los nuevos datos del registro
$NOMBRE=$_POST['Nombre'];
$TELEFONO=$_POST['Telefono'];
$MENSUALIDADES=$_POST['Mensualidades'];
mysqli_query($con, "UPDATE clientes
SET Id_Matricula='$ID', Nombre='$NOMBRE', Telefono='$TELEFONO', Mensualidades='$MENSUALIDADES' 
WHERE Id_Matricula='$ID'"); // actualiza los clientes del registro
header("Location:Actualizar_Clientes.php"); // redirecciona a la primera página de Actualizar articulos 
mysqli_close($con); //cerramos la conexión a la BD 
?>