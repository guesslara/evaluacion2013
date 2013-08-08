<? require("config.inc");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo $titleEstadisticas; ?></title>
<style type="text/css">
body,document{ margin:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;}
#div_all{ position:absolute; width:1000px; height:650px; background-color:#efefef; padding:5px;}
#div_titulo{ text-align:center; font-weight:bold; font-size:14px;}
#div_menu{ height:20px; text-align:right; }
	li{ list-style-type:none;}
#div_datos{ position:relative; height:600px; overflow:auto; background-color:#FFFFFF; padding:2px; text-align:center; }
	#div_datos_grafica_default{ position:relative; width:400px; height:300px; top:50%; left:50%; margin-top:-150px; margin-left:-200px; text-align:center; }
#div_pie{ font-size:9px; text-align:center; color:#0066FF;}
a{ text-decoration:none;}
</style>
<script language="javascript" src="graf/jquery.min.js"></script>
<script language="javascript">
function ajax(capa,datos,ocultar_capa){
	if (!(ocultar_capa==""||ocultar_capa==undefined||ocultar_capa==null)) { $("#"+ocultar_capa).hide(); }
	var url="grafica2.php";
	//alert("URL="+url+"\nCAPA="+capa+"\nDATOS="+datos);
	$.ajax({
		async:true,
		type: "POST",
		dataType: "html",
		contentType: "application/x-www-form-urlencoded",
		url:url,
		data:datos,
		beforeSend:function(){ 
			$("#"+capa).show().html('<center>Procesando, espere un momento.</center>'); 
		},
		success:function(datos){ $("#"+capa).show().html(datos); },
		timeout:90000000,
		error:function() { $("#"+capa).show().html('<center>Error: El servidor no responde. <br>Por favor intente mas tarde. </center>'); }
	});
}
</script>
</head>

<body>
<div id="div_all">
	<div id="div_titulo">Encuesta &quot;CLIMA LABORAL 2012&quot;.</div>
	<div id="div_menu">
		<a href="javascript:ajax('div_datos','accion=estadisticas');">Estad&iacute;sticas</a> | 
		<a href="departamentos.php">Departamentos</a> | 
		<a href="graficar_respuesta.php?i=1">Respuestas</a> | 
		<a href="javascript:ajax('div_datos','accion=graficar_general');">Datos de la Encuesta 2012.</a>
	</div>
	<div id="div_datos">
		<div id="div_datos_grafica_default"><img src="img/graf2.png" />		</div>
	</div>
	<div id="div_pie">&copy; 2012 - IQelectronics International - Depto. Sistemas</div>
</div>

</body>
</html>
