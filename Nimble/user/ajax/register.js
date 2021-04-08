$(document).ready(function(){
	$('#registerButton').click(function(){
	var DATA = $('#formRegister').serialize();

	if (($('#clave').val()) != ($('#claveConfirm').val())){exit;}
	if (true) {}

		$.ajax({
			type: "POST",
			url: "../phpfiles/register.php",
			data: DATA,
			success: function(i){
				if (i == "SUCCESS") {
					location.href = "../phpfiles/user-direcction.php";
				}else{
					alert(i);
				}
			}
		});

	});
});