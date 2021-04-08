<?php 
include("../phpfiles/session-data.php");
if (!$_SESSION) {header('Location: ../pages/login.php');}else{}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nimble | <?php echo $Usuario ?></title>
	<link rel="icon" href="../../pictures/nimble/nimble.png" />

	<!-- Librerías -->
	<script type="text/javascript" src="../../librerias/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="../../iconos/style.css">
	<link rel="stylesheet" href="../../librerias/animate.css">

	<!-- Globales -->
	<link rel="stylesheet" href="../../style/estilos_globales.css">
	<link rel="stylesheet" href="../../style/fuentes.css">
	<link rel="stylesheet" type="text/css" href="../../style/brains.css">

	<script type="text/javascript" src="../../script/globalLoadsBrains.js"></script>

	<!-- Estilos -->
	<link rel="stylesheet" href="style/dashboard.css">

	<!-- Scripts -->
	<script type="text/javascript" src="scripts/dashboard.js"></script>


</head>
<body>
	<header class="session-started" id="headerSession"></header>
	<div class="contentGeneralInfo">
		
	</div>
</body>
</html>