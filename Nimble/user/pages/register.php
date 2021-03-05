<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrarme </title>

	<!-- Librerías -->
	<script type="text/javascript" src="../../librerias/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="../../iconos/style.css">
	<link rel="stylesheet" href="../../librerias/animate.css">

	<!-- Globales -->
	<link rel="stylesheet" href="../../style/estilos_globales.css">
	<link rel="stylesheet" href="../../style/fuentes.css">

	<!-- Estilos -->
	<link rel="stylesheet" href="style/registrarme.css">

	<!-- Ajax -->
	<script type="text/javascript" src="../ajax/register.js"></script>
	<script type="text/javascript" src="../script/validaciones.js"></script>

</head>
<body>
	<div class="container-form">
		<img src="images-server/computer-1245714_1920.jpg" class="background">
		<div class="filter-from-background"></div>
		<header>
			<div class="container">
				<div class="iconrel">
					<img src="../../pictures/nimble/nimble.png" alt="Nimble">
					<nav>
						<a href="">Blog</a>
						<a href="">Herramientas</a>
						<a href="">Tienda</a>
					</nav>
				</div>
				<div class="linkRel">
					<a href="">Ingresar</a>
				</div>
			</div>
		</header>
		<div class="container-form-complete">
			<div class="content-image-form">
				<img src="images-server/computer-1245714_1920.jpg" class="background">
				<img src="../../pictures/others/405-4053283.png" class="sombreado">
			</div>
			<div class="form-entradas">
				<div class="entradas-form">
					<section>
						<center>
							<form method="POST" id="formRegister" style="display: contents;">
								<div class="entrada" id="nombreEntrada">
									<div class="icon-content">
										<span class="despok_icon-user"></span>
									</div>
									<input type="text" placeholder="Nombre completo" name="nombre" id="nombre">
									<div class="contentVerifi">
										<span class="animated" id="nombreIcon"></span>
									</div>
								</div>
								<p id="nameInvalidP">El nombre es obligatorio</p>
								<div class="entrada">
									<div class="icon-content">
										<span class="despok_icon-user-tie"></span>
									</div>
									<input type="text" placeholder="Nombre de usuario" name="usuario" id="usuario">
									<div class="contentVerifi">
										<span class="animated" id="usuarioIcon"></span>
									</div>
								</div>
								<div class="entrada">
									<div class="icon-content">
										<span class="despok_icon-mail2"></span>
									</div>
									<input type="mail" placeholder="Correo electronico" name="email" id="email">
									<div class="contentVerifi">
										<span class="animated" id="emailIcon"></span>
									</div>
								</div>
								<hr>
								<div class="entrada">
									<div class="icon-content">
										<span class="despok_icon-info"></span>
									</div>
									<input type="password" placeholder="Contraseña" name="clave" id="clave">
									<div class="contentVerifi">
										<span class="animated" id="claveIcon"></span>
									</div>
								</div>
								<div class="entrada" id="confirmEntrada">
									<div class="icon-content">
										<span class="despok_icon-warning"></span>
									</div>
									<input type="password" placeholder="Confirma tu contraseña" id="claveConfirm">
									<div class="contentVerifi">
										<span class="animated" id="claveConfirmIcon"></span>
									</div>
								</div>
								<p id="claveInvalidP">Las contraseñas no coinciden</p>
								<div class="desc-info-select">
									<input type="checkbox">
									<span>¿Quieres recibir notificaciones por Email?</span>
								</div>
							</form>
							<div class="buttonContent">
								<button id="registerButton">Registrarme ahora</button>
							</div>
						</center>
					</section>
				</div>
			</div>
		</div>
	</div>
</body>
</html>