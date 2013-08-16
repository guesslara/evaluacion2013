<?php
session_start();
$_SESSION["respuestas_globales"]=array();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
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
		url:"resultados.php",
		data:datos,
		beforeSend:function(){ 
			$("#"+capa).show().html('Procesando, espere un momento.'); 
		},
		success:function(datos){ $("#"+capa).show().html(datos); },
		timeout:90000000,
		error:function() { $("#"+capa).show().html('<center>Error: El servidor no responde. <br>Por favor intente mas tarde. </center>'); }
	});
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
	#all{ position:absolute; width:1000px; left:50%; margin-left:-500px; background-color:#FFFFCC; border:#FFCC00 1px solid;}
	#contenido{ margin:5px; background-color:#FFFFFF; border:#CCCCCC 1px solid; height:690px; overflow:auto;  }
		#menu{ text-align:left; }
	/*,#div_temas,#div_preguntas*/
	#pie{ font-size:10px; text-align:center;  border-top:#333333 1px dotted; }
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
	<div id="pie">&copy; 2009 - IQelectronics International - Depto. Sistemas</div>
</div>
</body>
</html>