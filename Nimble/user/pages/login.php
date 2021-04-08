<?php 
include("../phpfiles/session-data.php");
if ($_SESSION) {header('Location: ../dashboard/');}else{}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="icon" href="../../pictures/nimble/nimble.png" />

	<!-- Librerías -->
	<script type="text/javascript" src="../../librerias/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="../../iconos/style.css">
	<link rel="stylesheet" href="../../librerias/animate.css">

	<!-- Globales -->
	<link rel="stylesheet" href="../../style/estilos_globales.css">
	<link rel="stylesheet" href="../../style/fuentes.css">

	<!-- Estilos -->
	<link rel="stylesheet" href="style/ingresar.css">

	<!-- Scripts -->
	<script type="text/javascript" src="scripts/login-someFunctions.js"></script>

	<!-- Ajax -->
	<script type="text/javascript" src="../ajax/login.js"></script>

</head>
<body>
	<div class="contentinice">
		<img src="images-server/computer-1245714_1920.jpg" class="pre_background" alt="Header Backround">
		<div class="containerfluit">
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="particle"></div>
			<div class="border">
				<a href="../../../" style="display: contents;">
					<img src="../../pictures/nimble/NimbleShadow.png" alt="Nimble">
				</a>
			</div>
			<div class="border"></div>
			<div class="entradas">
				<div class="phofilep">
					<img src="../../pictures/svg/userdefault.svg">
				</div>
				<div class="entradasbyingreso">
					<form method="POST" id="access-form">
						<div class="entrada" id="badEmailcss">
							<input type="text" placeholder="Correo electronico" name="access_email">
							<div class="contenticono">
								<span class="despok_icon-user"></span>
							</div>
						</div>
						<div class="entrada" id="badPasswordcss">
							<input type="password" id="passwordentrada" placeholder="Ingresa tu contraseña" name="access_password">
							<div class="contenticono">
								<button id="seePassword" type="button"><span class="despok_icon-eye" id="iconsee"></span></button>
							</div>
						</div>
					</form>
					<div class="contentCentraloc">
						<label for="sessionconfirm" class="despok_icon-checkbox-unchecked" id="Check"></label><span>Mantener mi sesión iniciada</span>
						<input type="checkbox" id="sessionconfirm">
					</div>
					<div class="contentCentraloc">
						<button id="access-btn">Iniciar sesion</button>
					</div>
					<div class="contentCentraloc">
						<p>¿No tienes cuenta en ACME? <a href="register.php">Registrate</a><br>¿Tienes problemas al iniciar sesion? <a href="#">Olvidé mi contraseña</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="contenedorComentario animated jackInTheBox delay-2s">
			<div class="contenedorusurimage">
				<img src="../pictures/phofiles/carlota/carlota.jpg" alt="Carlota">
			</div>
			<h3>Carlota</h3>
			<div class="contentprogress">
				<span class="despok_icon-sad"></span><progress value="70" max="100"></progress><span class="despok_icon-smile"></span>
			</div>
			<p>No está mal, pero sabían que Albion Online es un mmorpg no lineal, en el que escribes tu propia historia sin limitarte a seguir un camino prefijado. Explora un amplio mundo abierto con 5 biomas únicos, todo cuánto hagas tendrá su repercusión en el mundo, con la economía orientada al jugador de Albion, los jugadores crean prácticamente todo el equipo a partir de los recursos que consiguen?</p>
		</div>
		<svg>
			<defs>
				<filter id="goo">
					<feGaussianBlur in='SourceGraphic'
					stdDeviation='10'/>
					<feColorMatrix in='name' mode='matrix'
						values='1 0 0 0 0
								0 1 0 0 0
								0 0 1 0 0
								0 0 0 30 -15' />
					<feBlend in='SourceGraphic' />
				</filter>
			</defs>
		</svg>
	</div>
</body>
</html>