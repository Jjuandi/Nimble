<?php 
$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASSWORD = "";
$DATABASE_NAME = "nimble";

$MSG_FAIL = "La conexión ha fallado, verifique el archivo de conexión o comuniquese con el administrador";

$CONNECT = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_NAME) OR DIE ($MSG_FAIL);

?>