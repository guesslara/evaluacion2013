<? require("config.inc");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo $title;?></title>
<script language="javascript" src="clases/jquery.js"></script>
<!--<script src="js/funciones.js" type="text/javascript"></script>
--><script language="javascript">
function presentacion(){
	datos="action=presentacion";
	ajax("div_presentacion",datos,"");
}
function ajax(capa,datos,ocultar_capa){
	if (!(ocultar_capa==""||ocultar_capa==undefined||ocultar_capa==null)) { $("#"+ocultar_capa).hide(); }
	$.ajax({
		async:true,
		type: "POST",
		dataType: "html",
		contentType: "application/x-www-form-urlencoded",
		url:"controlador.php",
		data:datos,
		beforeSend:function(){ 
			$("#"+capa).show().html('Procesando, espere un momento.'); 
		},
		success:function(datos){ $("#"+capa).show().html(datos); },
		timeout:90000000,
		error:function() { $("#"+capa).show().html('<center>Error: El servidor no responde. <br>Por favor intente mas tarde. </center>'); }
	});
}
var preguntas = new Array();
var respuestas = ""
function actualiza(oRad,n){
	var valor_actual=oRad.value;
	//alert("N ["+n+"] \nValor actual ["+valor_actual+"]");
	preguntas[n-1]=valor_actual;
	if(respuestas==""){
		respuestas=preguntas[n-1];
	}else{
		respuestas=respuestas+","+preguntas[n-1];
	}
	//alert(respuestas);
	//$("#preguntasDiv").html(preguntas[i]+",");
}
function validarRespuestas(nroRespuestas,idTema,nroPregunta){	
	respuestasP=""; contRespuestas=0;
	valida=true;
	for (i=0;i<document.frmPreguntas.elements.length;i++){
		if (document.frmPreguntas.elements[i].type=="radio"){			
			if (document.frmPreguntas.elements[i].checked){								
				if(respuestasP==""){
					contRespuestas+=1;
					respuestasP=document.frmPreguntas.elements[i].value;
				}else{
					contRespuestas+=1;
					respuestasP=respuestasP+"|"+document.frmPreguntas.elements[i].value;
				}				
			}
		}
	}
	if(parseInt(contRespuestas)==parseInt(nroRespuestas)){
		//se envian las respuestas para ser guardadas en la variable de session
		//alert(respuestasP);
		ajax("div_editar","action=guardarRespuestas&respuestasP="+respuestasP+"&idTema="+idTema+"&nroPregunta="+nroPregunta);
	}else{
		alert("Error, no deje ninguna pregunta sin contestar");
	}
}
function datosIniciales(){
	//se recuperan los valores iniciales
	txtFechaEv=$("#txtFechaEv").val();
	txtNombreEv=$("#txtNombreEv").val();
	txtPuestoEv=$("#txtPuestoEv").val();
	txtGerenciaEv=$("#txtGerenciaEv").val();
	txtUbicacionEv=$("#txtUbicacionEv").val();
	relacion=$("input[name='rdbEvaluador']:checked").val();
	if(txtFechaEv=="" || txtNombreEv=="" || txtPuestoEv=="" || txtGerenciaEv=="" || txtUbicacionEv=="" || relacion==undefined || relacion==null){
		alert("No deje espacios en Blanco, todos los campos son requeridos.");
	}else{
		//se envian a guardarse en el arreglo
		parametros="action=guardarDatosIniciales&txtFecha="+txtFechaEv+"&txtNombre="+txtNombreEv+"&txtPuesto="+txtPuestoEv+"&txtGerencia="+txtGerenciaEv+"&txtUbicacion="+txtUbicacionEv+"&relacion="+relacion
		ajax("div_editar",parametros);
	}
	//alert("Fecha "+txtFechaEv+"\nNombre: "+txtNombreEv+"\nPuesto: "+txtPuestoEv+"\nGerencia: "+txtGerenciaEv+"\nUbicacion "+txtUbicacionEv+"\nRelacion "+relacion);
}
function guardarComplemento(){
	txtComplementoA=$("#txtComplementoA").val();
	txtComplementoB=$("#txtComplementoB").val();
	txtComplementoC=$("#txtComplementoC").val();
	txtEvaluadorComplemento=$("#txtEvaluadorComplemento").val();
	parametros="action=guardaComplemento&complementoA="+txtComplementoA+"&complementoB="+txtComplementoB+"&complementoC="+txtComplementoC+"&evaluador="+txtEvaluadorComplemento;
	if(txtEvaluadorComplemento=="" || txtEvaluadorComplemento==null || txtEvaluadorComplemento==undefined){
		alert("Indique el nombre del evaluador");
	}else{
		ajax("div_editar",parametros);
	}
}
function guardarComplemento2(){
	txtObservacionesCom=$("#txtObservacionesCom").val();
	txtEvaluadorComplemento2=$("#txtEvaluadorComplemento2").val();
	parametros="guardaComplemento2&txtObservacionesCom="+txtObservacionesCom+"&txtEvaluadorCom="+txtEvaluadorComplemento2;
	ajax("div_editar",parametros);
}
function gracias(){
	depto=$("#cboDepto").val();
	if(depto=="Selecciona"){
		alert("Por favor, seleccione el departamento");
	}else{
		ajax("div_resultados","action=gracias&depto="+depto)	
	}	
}
function guardarEncuesta(){
	ajax("div_resultados","action=guardarEncuesta")
}
 function ver_respuesta(id_item){
	datos="action=ver_respuesta&id_item="+id_item;
	ajax("div_resultados",datos,"div_temas"); 
 }
 function editar(id_item){
	datos="action=editar&id_item="+id_item;
	ajax("div_editar",datos,"div_presentacion"); 
 }
</script>
<style type="text/css">
body{overflow: hidden;}
	#all{ position:absolute; width:98.5%; margin:0 auto 0 auto; background-color:#FFFFCC; border:#FFCC00 1px solid;height: 98%;}
	#contenido{ margin:5px; background-color:#FFFFFF; border:#CCCCCC 1px solid; height:96%; overflow:auto;  }
		#menu{ text-align:left; }
	/*,#div_temas,#div_preguntas*/
	#pie{ font-size:10px; text-align:center;  border-top:#333333 1px dotted;font-weight: bold; }
</style>
</head>
<body onload="presentacion()">
<div id="all">
	<div id="menu">
	
	</div>		
	<div id="contenido">
		<div id="div_presentacion">
		<?php 
		//include 'resultados.php';
		?>
		</div>
		<div id="div_resultados">&nbsp;</div>
		<div id="div_editar">&nbsp;</div>
		<div id="autentificacions" style="z-index:2;"></div>
		<div id="valida" style="z-index:2;"></div>
		<div id="div_frm">&nbsp;</div>
	</div>
	<div id="pie">&copy; 2012 - IQelectronics International - Depto. Sistemas</div>
</div>
</body>
</html>