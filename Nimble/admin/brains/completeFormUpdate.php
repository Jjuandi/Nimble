<?php 
include("../../database/connection.php");
	$ID = $_REQUEST['IdPhp'];

	$ExecuteSql = mysqli_query($CONNECT, "SELECT * FROM usuario WHERE ID = '$ID'");
	while($MostrarUser = mysqli_fetch_array($ExecuteSql)){
?>

		<div class="contentForm">
			<div class="headerContentTitle">
				<div class="contentTitle">
					<div class="phofileUser">
						<img src="../<?php echo $MostrarUser['foto_de_perfil'] ?>" alt="Phofile user">
					</div>
					<h2>Actualizar datos del usuario</h2>
				</div>
			</div>
			<form method="POST" id="formUpdate" autocomplete="off">
			<input type="hidden" value="<?php echo $ID ?>" name="identificador">
				<div class="entradaContentInput">
					<div class="entradaCont">
						<label>Nombre completo</label>
						<div class="contentEntrada">
							<div class="iconContent">
								<span class="despok_icon-user"></span>
							</div>
							<input type="text" value="<?php echo $MostrarUser['nombre'] ?>" placeholder="Nombre completo" name="nombre">
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
							<input type="text" value="<?php echo $MostrarUser['user'] ?>" placeholder="Nombre de usuario" name="usuario">
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
							<input type="text" value="<?php echo $MostrarUser['email'] ?>" placeholder="Email" name="email">
							<div class="validSpan">
								<span class="despok_icon-home"></span>
							</div>
						</div>
					</div>
				</div>
				<center><hr style="width: 60%"></center>
				<div class="entradaContentInput">
					<div class="entradaCont">
						<label>Creación de usuario</label>
						<div class="contentEntrada">
							<div class="iconContent">
								<span class="despok_icon-user-plus"></span>
							</div>
							<input type="text" value="<?php echo $MostrarUser['fecha_de_creacion'] ?>" disabled>
						</div>
					</div>
					<div class="entradaCont">
						<label>Última actualización de datos</label>
						<div class="contentEntrada">
							<div class="iconContent">
								<span class="despok_icon-calendar"></span>
							</div>
							<input type="text" value="<?php echo $MostrarUser['fecha_de_actualizacion'] ?>" disabled>
						</div>
					</div>
				</div>
			</form>
			<div class="contentButtons">
				<button onclick="FINAL_CONTENT_GENERAL()">Cancelar</button>
				<button onclick="confirmUpdate()">Actualizar</button>
			</div>
		</div>
<?php } ?>