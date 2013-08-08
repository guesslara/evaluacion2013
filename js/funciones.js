// JavaScript Document
function reportarError(){
	$.ajax({
	async:true,
	type: "GET",
	dataType: "html",
	contentType: "application/x-www-form-urlencoded",
	url:"funciones.php",
	data:"action=reportarError",
	beforeSend:function(){ 
		$("#reportar").show().html('<center><br><img src="img/gif/LOADING1.GIF"><br>Procesando informacion, espere un momento.</center>'); 
	},
	success:function(datos){ 
		$("#reportar").show().html(datos);
	},
	timeout:90000000,
	error:function() { $("#reportar").show().html('<center>UPs parece que ha ocurrido un problema. <br>Por favor intente mas tarde. </center>'); }
	});
}
function cerrarError(){
	$("#reportar").hide()
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++
function autentificacion(){
	$.ajax({
	async:true,
	type: "POST",
	dataType: "html",
	contentType: "application/x-www-form-urlencoded",
	url:"resultados.php",
	data:"action=autentificacion",
	beforeSend:function(){ 
		$("#autentificacions").show().html('<center><br><img src="img/gif/LOADING1.GIF"><br>Procesando informacion, espere un momento.</center>'); 
	},
	success:function(datos){ 
		$("#autentificacions").show().html(datos);
	},
	timeout:90000000,
	error:function() { $("#autentificacions").show().html('<center>UPs parece que ha ocurrido un problema. <br>Por favor intente mas tarde. </center>'); }
	});
}
function cerrarError(){
	$("#autentificacions").hide()
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function enviarInfo(){
	//se recuperan los datos
	var problema=document.getElementById("txtProblema").value;
	var des=document.getElementById("txtDes").value;
	if((problema=="") || (des=="")){
		alert('Debe llenar todos los campos para poder enviar la Informacion');
	}else{
		$.ajax({
		async:true,
		type: "POST",
		dataType: "html",
		contentType: "application/x-www-form-urlencoded",
		url:"funciones.php",
		data:"action=guardarError&problema="+problema+"&des="+des,
		beforeSend:function(){ 
			$("#reportar").show().html('<center><br><img src="img/gif/LOADING1.GIF"><br>Procesando informacion, espere un momento.</center>'); 
		},
		success:function(datos){ 
			$("#reportar").show().html(datos);
		},
		timeout:90000000,
		error:function() { $("#reportar").show().html('<center>UPs parece que ha ocurrido un problema. <br>Por favor intente mas tarde. </center>'); }
		});	
	}
}