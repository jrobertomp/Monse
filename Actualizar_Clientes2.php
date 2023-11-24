<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilostablas.css">
<meta charset="utf-8"/>
<style type="text/css"></style>
</head>
<body>
<?php
$con = mysqli_connect ("localhost", "root","","smartfit");// se crea la conexión al servidor
$MATRICULA=$_POST['id']; //clave del registro seleccionado
$resultado = mysqli_query ($con, "select * from clientes where Id_Matricula = $MATRICULA"); //consultamos el contenido de la tabla articulos
if($resultado === FALSE) {
	echo "fallo ";
die (mysqli_error()); // Muestra el error que ocurrió echo"<center>".
}
echo "<form action=Actualizar_Clientes3.php method=POST>";
echo "<h1>Editar Clientes</h1>";
echo "<table border='0'>";
while($row=mysqli_fetch_array($resultado)) //Muestra el contenido del registro a editar
{
echo "<tr>";
echo "<td>Matricula:</td>"; echo "<td><input type='text' name='Id' value=". $row['Id_Matricula']."></td></tr>";
echo "<tr>";
echo "<td>Nombre:</td>"; echo "<td><input type='text' name='Nombre' value=". $row['Nombre']."></td></tr>";
echo "<tr>";
echo "<td>Telefono:</td>"; echo "<td><input type='text' name='Num' value=". $row['Telefono']."></td></tr>";
echo "<tr>";

echo "<td>Mensualidades:</td>"; echo "<td><input type='text' name='Mensualidades' value=". $row['Mensualidades']."></td></tr>";
echo "<tr>";
}
echo "</table>";
mysqli_close($con);
echo "<input type=submit value=Acualizar Clientes/>";
echo "</form>";
?>
</body>
</html>