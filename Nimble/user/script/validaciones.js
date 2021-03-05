$(document).ready(function(){
	//$('#nameInvalidP').css("display", "block");
	//$('#nombreEntrada').addClass("is-invalid");

	$('#nombre').keyup(function(){
		$('#nombreIcon').addClass("despok_icon-checkmark2");
		$('#nombreIcon').addClass("bounceIn");
	});

	$('#usuario').keyup(function(){
		$('#usuarioIcon').addClass("despok_icon-checkmark2");
		$('#usuarioIcon').addClass("bounceIn");
	});

	$('#email').keyup(function(){
		$('#emailIcon').addClass("despok_icon-checkmark2");
		$('#emailIcon').addClass("bounceIn");
	});

	$('#clave').keyup(function(){
		$('#claveIcon').addClass("despok_icon-checkmark2");
		$('#claveIcon').addClass("bounceIn");
	});

	$('#claveConfirm').keyup(function(){
		if (($('#clave').val()) == ($('#claveConfirm').val())) {
			$('#claveIcon').addClass("despok_icon-checkmark2");
			$('#claveIcon').addClass("bounceIn");

			$('#claveConfirmIcon').addClass("despok_icon-checkmark2");
			$('#claveConfirmIcon').addClass("bounceIn");			
			$('#confirmEntrada').removeClass("is-invalid");
			$('#claveInvalidP').css("display", "none");
		}else{
			$('#claveConfirmIcon').addClass("despok_icon-cross");
			$('#claveConfirmIcon').addClass("bounceIn");
			$('#claveInvalidP').css("display", "block");
			$('#claveInvalidP').addClass("animated");
			$('#claveInvalidP').addClass("flipInX");
			$('#confirmEntrada').addClass("is-invalid");
		}
	});
});