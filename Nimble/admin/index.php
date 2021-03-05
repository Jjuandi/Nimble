<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administación</title>

		<!-- Librerias Externas -->
		<link rel="stylesheet" href="../iconos/style.css">
		<link rel="stylesheet" href="../librerias/animate.css">
		<link rel="stylesheet" type="text/css" href="iconos/style.css">
		<script type="text/javascript" src="../librerias/jquery-3.4.1.min.js"></script>

		<!-- Nuestros estilos Globales -->
		<link rel="stylesheet" href="../style/estilos_globales.css">
		<link rel="stylesheet" href="../style/fuentes.css">

		<!-- Estilos Home -->
		<link rel="stylesheet" href="style/admin.css">

</head>
<body>
	<header>
		<div class="content-header">
			<div class="menu-icon-header">
				<span class="despok_icon-menu"></span>
				<img src="../pictures/despok/Despok.png" alt="Despok">
			</div>
			<div class="search-entrada-content">
				<div class="entrada">
					<div class="span-icon">
						<span class="despok_icon-search"></span>
					</div>
					<input type="text" placeholder="Buscar en el panel">
				</div>
			</div>
			<div class="user-options-admin">
				<button><span class="despok_icon-newspaper"></span>CREAR</button>
				<div class="phofile-user">
					<img src="../user/pictures/phofiles/default/esacmin.jpg" alt="admin">
				</div>
			</div>
		</div>
	</header>
	<div class="dashborad-panel-admin">
		<div class="panel-options">
			<div class="user-content">
				<div class="flex-center">
					<center>
						<div class="image-user-phofile" title="Ver perfil de usuario">
							<img src="../user/pictures/phofiles/default/esacmin.jpg" alt="admin">
							<div class="radius-link-user">
								<span class="despok_icon-compass"></span>
							</div>
						</div>
						<span>Administración</span>
						<p>Juan Diego Gómez</p>
					</center>
				</div>
			</div>
			<div class="options-content">
				<div class="entrada-button-option option-active">
					<span class="despok_icon-magic-wand"></span><label>Panel</label>
				</div>
				<div class="entrada-button-option">
					<span class="despok_icon-users"></span><label>Usuarios</label>
				</div>
				<div class="entrada-button-option">
					<span class="despok_icon-stats-bars"></span><label>Analytics</label>
				</div>
				<div class="entrada-button-option">
					<span class="despok_icon-pencil2"></span><label>Contenido</label>
				</div>
			</div>
			<div class="footer-options">
				<div class="entrada-button-option">
					<span class="despok_icon-cog"></span><label>Configuración</label>
				</div>
				<div class="entrada-button-option">
					<span class="despok_icon-bubble"></span><label>Enviar comentarios</label>
				</div>
			</div>
		</div>
		<div class="panel-complete-admin">
			<div class="dashboard-base panel-dashboard">
				<div class="header-title-option">
					<p>Panel de administrador</p>
					<div class="options-buttons">
						<button class="despok_icon-cloud-upload"></button>
						<button class="despok_icon-user"></button>
						<button class="despok_icon-bubble"></button>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>