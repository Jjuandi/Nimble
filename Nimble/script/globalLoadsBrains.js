function loadHeaderNotSesionHome(){
	// Header [Header para la no sesión en el Home]
	$('#inicial-header').css("display", "flex");
	$('#inicial-header').load("Nimble/global_brains/normal_header-home.html");
}

function loadHeaderSessionHome(){
	// Header [Header para el Home con sesión iniciada]
	$('#headerSession').css("display", "flex");
	$('#headerSession').load("Nimble/global_brains/normal_header-home.php");
}

function loadHeaderSession(){
	// Header [Header para la sesión en el Dashboard]
	$('#headerSession').css("display", "flex");
	$('#headerSession').load("../../global_brains/header_sesion.php");
}

function loadHeaderNotSesion(){
	// Header #inicial-header [Header para sesiones No Abiertas]
	$('#inicial-header').css("display", "flex");
	$('#inicial-header').load("../global_brains/normal_header.html");
}

function loadHeaderSession2(){
	// Header #headerSession [Header para sesiones Abiertas]
	$('#headerSession').css("display", "flex");
	$('#headerSession').load("../global_brains/header_sesion2.php");
}

function verificarAlert(){
	alert("ZZX");
}