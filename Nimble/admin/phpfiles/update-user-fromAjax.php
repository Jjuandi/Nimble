<?php 
include("../../database/connection.php");

	$ID = $_POST['identificador'];
	$Nombre = $_POST['nombre'];
	$Usuario = $_POST['usuario'];
	$Email = $_POST['email'];

	$ExecuteSql = mysqli_query($CONNECT, "UPDATE usuario SET nombre = '$Nombre', user = '$Usuario', email = '$Email', fecha_de_actualizacion = CURDATE() WHERE ID = '$ID'");

	if ($ExecuteSql) { echo "SUCCESS"; }else{ echo "FAIL"; }
	
 ?>