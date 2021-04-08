<?php 
include("../../database/connection.php");

SESSION_START();
$ID = $_SESSION['Id'];

	$DataUser = mysqli_query($CONNECT, "SELECT * FROM usuario WHERE ID = '$ID'");
	while($DataFetch = mysqli_fetch_array($DataUser)){
		$_SESSION['tipoUsuario'] = $DataFetch['tipo_usuario'];
		$_SESSION['nombre'] = $DataFetch['nombre'];
		$_SESSION['usuario'] = $DataFetch['user'];
		$_SESSION['email'] = $DataFetch['email'];
		$_SESSION['actualizacion'] = $DataFetch['fecha_de_actualizacion'];
		$_SESSION['foto'] = $DataFetch['foto_de_perfil'];

		if ($_SESSION['tipoUsuario'] == 0) {header('Location: ../../admin');}else{header('Location: ../dashboard/');}
	}
?>