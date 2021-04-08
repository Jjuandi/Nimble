<?php 
include("../user/phpfiles/session-data.php");
?>

		<div class="container">
			<div class="iconNav">
				<nav>
					<img src="Nimble/pictures/nimble/nimble.png" alt="Nimble">
					<div class="contentEntrada">
						<div class="iconContent">
							<span class="despok_icon-search"></span>
						</div>
						<input type="text" placeholder="Búsca...">
					</div>
					<a href="">Blogs</a>
					<a href="">Tienda</a>
					<a href="">Herramientas</a>
					<a href="">Suscripciones</a>
					<a href="">Comunidad</a>
				</nav>
			</div>
			<div class="contentUser">
				<nav>
					<div class="contentUserData">
						<div class="divPhofileImage">
							<img src="Nimble/user/pictures/phofiles/<?php echo $Fotografia ?>" alt="<?php echo $Nombre ?>">
						</div>
						<div class="complete-data-user animated fadeIn">
							<div class="header-user-cont">
								<div class="imagePhofile">
									<div class="image-phofile">
										<img src="Nimble/user/pictures/phofiles/<?php echo $Fotografia ?>" alt="<?php echo $Nombre ?>">
									</div>
								</div>
								<div class="infoTitle">
									<div class="inf">
										<h3><?php echo $Usuario ?></h3>
										<span>Ver perfil</span>
									</div>
								</div>
								<div class="span-user">
									<span class="despok_icon-circle-right"></span>
								</div>
							</div>
							<div class="options-buttons-user">

								<div class="button-content-option">
									<div class="icon-content">
										<span class="despok_icon-newspaper"></span>
									</div>
									Mis sucripciones
								</div>
								<div class="button-content-option">
									<div class="icon-content">
										<span class="despok_icon-rocket"></span>
									</div>
									Servicios
								</div>
								<div class="button-content-option">
									<div class="icon-content">
										<span class="despok_icon-bubble"></span>
									</div>
									Mi actividad
								</div>
								<div class="button-content-option">
									<div class="icon-content">
										<span class="despok_icon-users"></span>
									</div>
									Servicio al cliente
								</div>
								<hr>
								<div class="content-min-title">
									Preguntas frecuentes
								</div>
								<a href="Nimble/documents/Terminos y condiciones.pdf" target="_blank"><div class="content-min-title">
									Terminos y condiciones
								</div></a>
								<div class="content-min-title">
									Configuración
								</div>
								<a href="Nimble/user/phpfiles/log-out.php"><div class="content-min-title">
									Salir
								</div></a>
							</div>
						</div>
					</div>
					<button class="despok_icon-bell"></button>
					<button class="despok_icon-cart"></button>
					<button class="despok_icon-heart"></button>
				</nav>
			</div>
		</div>