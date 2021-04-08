$(document).ready(function(){
	$('#access-btn').click(function(){
		var dataLogin = $('#access-form').serialize();

		$.ajax({
			type: "POST",
			url: "../phpfiles/loginVerifi.php",
			data: dataLogin,
			success: function(l){
				if (l == "SUCCESS") {
					location.href = "../phpfiles/user-direcction.php";
				}else{
					alert(l);
				}
			}
		});
	});
});