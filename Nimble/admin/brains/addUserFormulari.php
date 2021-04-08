<?php 
include("../../database/connection.php");

?>

			<div class="contentForm">
				<form method="POST" id="addUserAdmin">
					<div class="entradaContentInput">
						<div class="entradaCont">
							<label>Nombre completo</label>
							<div class="contentEntrada">
								<div class="iconContent">
									<span class="despok_icon-user"></span>
								</div>
								<input type="text" placeholder="Nombre completo" name="nombre">
								<div class="validSpan">
									<span class="despok_icon-home"></span>
								</div>
							</div>
						</div>
						<div class="entradaCont">
							<label>Nombre de usuario</label>
							<div class="contentEntrada">
								<div class="iconContent">
									<span class="despok_icon-user-tie"></span>
								</div>
								<input type="text" placeholder="Nombre de usuario" name="usuario">
								<div class="validSpan">
									<span class="despok_icon-home"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="entradaContentInput">
						<div class="entradaCont">
							<label>Email</label>
							<div class="contentEntrada">
								<div class="iconContent">
									<span class="despok_icon-mail3"></span>
								</div>
								<input type="text" placeholder="Email" name="email">
								<div class="validSpan">
									<span class="despok_icon-home"></span>
								</div>
							</div>
						</div>
						<div class="entradaCont">
							<label>Contraseña</label>
							<div class="contentEntrada">
								<div class="iconContent">
									<span class="despok_icon-lock"></span>
								</div>
								<input type="password" placeholder="Contraseña" name="clave">
								<div class="validSpan">
									<span class="despok_icon-home"></span>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="contentButtons">
					<button onclick="FINAL_CONTENT_GENERAL()">Cancelar</button>
					<button onclick="addUserAdminForm()">Agregar</button>
				</div>
			</div>