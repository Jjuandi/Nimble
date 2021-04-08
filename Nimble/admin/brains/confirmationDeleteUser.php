		<div class="contentQuestion">
			<div class="iconQuestion">
				<span class="despok_icon-question"></span>
			</div>
			<div class="questionContentInfo">
				<h3>¿Realmente quiere eliminar este usuario? (<?php echo $_REQUEST['IdPhp'] ?>)</h3>
			</div>
			<div class="buttonsOptions">
				<button onclick="confirmDeleteUser(<?php echo $_REQUEST['IdPhp'] ?>)">Eliminar</button>
				<button onclick="FINAL_CONTENT_GENERAL()">Cancelar</button>
			</div>
			<span class="footer-text">Puede desactivar estas notificaciones en la configuración del sistema</span>
		</div>