<?php 
include("../../database/connection.php");

	$Nombre = $_POST['nombre'];
	$Usuarios = $_POST['usuario'];
	$Email = $_POST['email'];
	$Clave = sha1($_POST['clave']);

	$PhofileDefault = "user/pictures/phofiles/default/userdefault.svg";

	$register_database = "INSERT INTO usuario (nombre, user, email, clave, fecha_de_creacion, fecha_de_actualizacion, foto_de_perfil) VALUES ('$Nombre', '$Usuarios', '$Email', '$Clave', CURDATE(), CURDATE(), '$PhofileDefault')";

	$verificarUser = mysqli_query($CONNECT, "SELECT * FROM usuario WHERE user = '$Usuarios'");
	if (mysqli_num_rows($verificarUser) > 0) { echo "USER:REGISTER";exit; }

	$verificarMail = mysqli_query($CONNECT, "SELECT * FROM usuario WHERE user = '$Email'");
	if (mysqli_num_rows($verificarMail) > 0) { echo "MAIL:REGISTER";exit; }

	$REGISTER = mysqli_query($CONNECT, $register_database);

	if ($register_database) {
		echo "SUCCESS";
	}else{
		echo "FAIL::CONSULTATION";
	}
?>