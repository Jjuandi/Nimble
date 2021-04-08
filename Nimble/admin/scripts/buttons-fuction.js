$(document).ready(function(){

$('#dashboard-base').load("pages-asy/users.php");

function botonesInteligentes(elemento){
	let objetos = $('.option-active');
	for (var i = 0; i <= objetos.length -1; i++) {
		$(objetos).removeClass("option-active");
	}$(elemento).addClass("option-active");
}


	$('#usuariosbtn').click(function(){
		botonesInteligentes(this);
	});

	$('#panelbtn').click(function(){
		botonesInteligentes(this);
	});

	$('#analyticsbtn').click(function(){
		botonesInteligentes(this);
	});

	$('#contenidobtn').click(function(){
		botonesInteligentes(this);
	});






});