<?php 
include("../../database/connection.php");
	$ID_USER = $_POST['phpdata'];
	$SQL_DELETE = mysqli_query($CONNECT, "DELETE FROM usuario WHERE ID = '$ID_USER'");
	if ($SQL_DELETE) { echo "SUCCESS"; }
?>