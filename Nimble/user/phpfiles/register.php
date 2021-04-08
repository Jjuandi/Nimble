<?php 
include("../../database/connection.php");

	$Nombre = $_POST['nombre'];
	$Usuario = $_POST['usuario'];
	$Email = $_POST['email'];
	$Clave = sha1($_POST['clave']);

	$PhofileDefault = "default/userdefault.svg";

	if ($Nombre == '' || $Usuario == '' || $Email == '' || $Clave == '') {
		echo "FAIL::DATA:INCOMPLETE";exit;}

	$register_database = "INSERT INTO usuario (tipo_usuario, nombre, user, email, clave, fecha_de_creacion, fecha_de_actualizacion, foto_de_perfil) VALUES (1, '$Nombre', '$Usuario', '$Email', '$Clave', CURDATE(), CURDATE(), '$PhofileDefault')";

	$verificarUser = mysqli_query($CONNECT, "SELECT * FROM usuario WHERE user = '$Usuario'");
	if (mysqli_num_rows($verificarUser) > 0) { echo "USER:REGISTER";exit; }

	$verificarMail = mysqli_query($CONNECT, "SELECT * FROM usuario WHERE user = '$Email'");
	if (mysqli_num_rows($verificarMail) > 0) { echo "MAIL:REGISTER";exit; }

	$REGISTER = mysqli_query($CONNECT, $register_database);

	if ($register_database) {
		echo "SUCCESS";

		SESSION_START();
			$_SESSION['Id'] = (mysqli_insert_id($CONNECT));

	}else{
		echo "FAIL::CONSULTATION";
	}
?>