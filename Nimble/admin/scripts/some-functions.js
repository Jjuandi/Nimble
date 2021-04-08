// Algunas funciones del CRUD
function eliminarUsuarioAjax(idUser){
	$('#contentQuestionOthers').css("display", "flex").hide().fadeIn(200);
	$('#contentQuestionOthers').load("brains/confirmationDeleteUser.php", {IdPhp:idUser});
}

function actualizarUsuarioAjax(idUser){
	$('#contentQuestionOthers').css("display", "flex").hide().fadeIn(200);
	$('#contentQuestionOthers').load("brains/completeFormUpdate.php", {IdPhp:idUser});
}

function addUserAdmin(){
	$('#contentQuestionOthers').css("display", "flex").hide().fadeIn(200);
	$('#contentQuestionOthers').load("brains/addUserFormulari.php")
}

// Funciones rellenadores success
function SUCCESS_USER(){
	$('#contentTableUser').load("pages-asy/complements-asy/table-users.php");
	$('#contentQuestionOthers').fadeOut();
}

// Función para rellenar Tablas
function FILL_TABLE_USER(){
	$('#contentTableUser').load("pages-asy/complements-asy/table-users.php");
}

// Ocultar contenedor de advertencia general
function FINAL_CONTENT_GENERAL(){
	$('#contentQuestionOthers').fadeOut();
}

$(document).ready(function(){
	//addUserAdmin();
});