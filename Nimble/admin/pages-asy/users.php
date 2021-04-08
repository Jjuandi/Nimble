<?php 
include("../../database/connection.php");
?>

<div class="content-all-users">
	<div class="contentCenterTable">
		<div class="contentd-search">
			<div class="content-all">
				<div class="entradaCampo">
					<div class="iconCampo">
						<span class="despok_icon-search"></span>
					</div>
					<input type="text" placeholder="Buscar usuario">
				</div>
				<div class="contentSelect">
					<div class="iconContent">
						<span class="despok_icon-user"></span>
					</div>
					<select>
						<option value="">Nombre</option>
						<option value="">Nombre</option>
						<option value="">Nombre</option>
					</select>
				</div>
				<button class="addUser" onclick="addUserAdmin()"><span class="despok_icon-plus" style="margin-right: 5px"></span> Agregar</button>
			</div>
		</div>
		<div class="contentTable" id="contentTableUser">
			<table class="table table-striped" style="margin: 0">
		  		<thead>
		   		 <tr>
		    		  <th scope="col">Rol</th>
		     		  <th scope="col">ID</th>
		    		  <th scope="col">Nombre</th>
		    		  <th scope="col">Nombre de usuario</th>
		    		  <th scope="col">Email</th>
		    		  <th scope="col">Última actualización</th>
		    		  <th scope="col">Acciones</th>
		   		 </tr>
				  </thead>
		 		 <tbody>
		 		 	<?php 
		 		 		$Exe_users = mysqli_query($CONNECT, "SELECT * FROM usuario");
		 		 		while($USUARIO = mysqli_fetch_array($Exe_users)){
		 		 	?>
		  		  <tr>
		    		  <td>Usuario</td>
		    		  <th scope="row"><?php echo $USUARIO['ID'] ?></th>
		    		  <td><?php echo $USUARIO['nombre'] ?></td>
		    		  <td><?php echo $USUARIO['user'] ?></td>
		     		 <td><?php echo $USUARIO['email'] ?></td>
		     		 <td><?php echo $USUARIO['fecha_de_actualizacion'] ?></td>
		     		 <td>
		     		 	<button onclick="actualizarUsuarioAjax(<?php echo $USUARIO['ID'] ?>)"><span class="despok_icon-pencil"></span></button>
		     		 	<button onclick="eliminarUsuarioAjax(<?php echo $USUARIO['ID'] ?>)"><span class="despok_icon-bin2"></span></button>
		     		 </td>
		   		 </tr>
		   			<?php } ?>
		  		</tbody>
			</table>
		</div>
	</div>
</div>