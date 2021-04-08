function addUserAdminForm(){
	var dataUserAdd = $('#addUserAdmin').serialize();
	$.ajax({
		type: "POST",
		url: "phpfiles/add-user-fromAjax.php",
		data: dataUserAdd,
		success: function(a){
			if (a == "SUCCESS") {SUCCESS_USER()}
			else if (a == "USER:REGISTER") {alert("El nombre de usuario ya se encuentra en uso")}
			else if (a == "MAIL:REGISTER") {alert("Este Email ya se encuentra en uso")}
			else {alert(a);}
		}
	});
}

function confirmUpdate(){
	var dataUpdate = $('#formUpdate').serialize();
	$.ajax({
		type: "POST",
		url: "phpfiles/update-user-fromAjax.php",
		data: dataUpdate,
		success: function(r){
			if (r == "SUCCESS") {SUCCESS_USER()} else {alert(r);}
		}
	})
}

function confirmDeleteUser(idUser){
	$.ajax({
		type: "POST",
		url: "phpfiles/delete-user-fromAjax.php",
		data: {phpdata:idUser},
		success: function(r){
			if (r == "SUCCESS") {SUCCESS_USER()} else {alert(r);}
		}
	});
}