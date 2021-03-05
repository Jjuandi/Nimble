$(document).ready(function(){
	$('#registerButton').click(function(){
	var DATA = $('#formRegister').serialize();

	if (($('#clave').val()) != ($('#claveConfirm').val())){exit;}

		$.ajax({
			type: "POST",
			url: "../phpfiles/register.php",
			data: DATA,
			success: function(i){
				if (i == "SUCCESS") {
					alert("Registrado correctamente");
				}else{
					alert(i);
				}
			}
		});

	});
});