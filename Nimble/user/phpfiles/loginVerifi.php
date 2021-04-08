<?php 
include("../../database/connection.php");

	$email = $_POST['access_email'];
	$clave = sha1($_POST['access_password']);

	$sql_search = mysqli_query($CONNECT, "SELECT ID, user, clave FROM usuario WHERE email = '$email'");

	if (mysqli_num_rows($sql_search) < 1) {echo "Este usuario no está registrado";exit;}

	while($MDATA = mysqli_fetch_array($sql_search)){
		if ($MDATA['clave'] != $clave) {echo "La contraseña es incorrecta";}else
		{
			echo "SUCCESS";
			SESSION_START();
				$_SESSION['Id'] = $MDATA['ID'];
		}
	}
?>