$(document).ready(function(){
		var cont = false;
		var cont2 = false;
	$('#Check').click(function(){
		if (cont == false) {
			$('#Check').removeClass("despok_icon-checkbox-unchecked");
			$('#Check').addClass("despok_icon-checkbox-checked");
			cont = true;
		}else{
			$('#Check').removeClass("despok_icon-checkbox-checked");
			$('#Check').addClass("despok_icon-checkbox-unchecked");
			cont = false;
		}
	});

	$('#seePassword').click(function(){
		var Entrada = document.getElementById('passwordentrada');
		if (cont2 == false) {
			$('#iconsee').removeClass("despok_icon-eye");
			$('#iconsee').addClass("despok_icon-eye-blocked");
			Entrada.type = "text";
			cont2 = true;
		}else{
			$('#iconsee').removeClass("despok_icon-eye-blocked");
			$('#iconsee').addClass("despok_icon-eye");
			Entrada.type = "password";
			cont2 = false;
		}
	})
});