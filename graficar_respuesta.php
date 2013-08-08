<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gr&aacute;ficas de la Encuesta 2012.</title>
<link type="text/css" rel="stylesheet" href="graf/visualize.jQuery.css"/>
<link type="text/css" rel="stylesheet" href="graf/demopage.css"/>
<script type="text/javascript" src="graf/jquery.min.js"></script>
<!--[if IE]><script type="text/javascript" src="graf/excanvas.compiled.js"></script><![endif]-->
<script type="text/javascript" src="graf/visualize.jQuery.js"></script>
<script type="text/javascript">
	$(function(){
		$('table').visualize({type: 'pie', pieMargin: 10, title: ''});	
	});
</script>
</head>
<body>
<div id="id_all" style=" margin-left:100px;">
<?php
	$i=$_GET["i"];
	if (empty($i)||(!is_numeric($i))){ echo "<br>Error: El valor recibido no es una entrada valida. <a href='".$_SERVER['PHP_SELF']."?i=1'>regresar</a>."; exit; }
	include("conexion.php");
	require("config.inc");
	$respuestas=array("TOTALMENTE DE ACUERDO","DE ACUERDO","EN DESACUERDO MEDIO","EN TOTAL DESACUERDO");
	
	echo '<h2>Encuesta &quot;CLIMA LABORAL 2009&quot;.</h2>';
	$sql0="SELECT temas.tema,preguntas.id_pregunta,preguntas.pregunta FROM temas,preguntas WHERE temas.id_tema=preguntas.id_tema AND id_pregunta=$i  ";
	if ($res0=mysql_query($sql0,$con)){
		$ndr0=mysql_num_rows($res0);
		if ($ndr0<=0){	echo "<br><div class='mensaje0'>No se encontraron resultados.</div>";  }
		while($reg0=mysql_fetch_array($res0)){
			//echo "<br>";	print_r($reg0);
			echo "<br><b>Tema:</b> ".$reg0["tema"];
			echo "<br><b>Pregunta:</b> ".$reg0["id_pregunta"]." ".$reg0["pregunta"];
			echo "<br>";
			//echo "<br><a href='".$_SERVER['PHP_SELF']."?i=".$i+1."'>Ver siguiente</a><br>";
			?><br><b>Ver:</b> <?php
			if ($i>1){ ?>	&nbsp;&nbsp;<a href="<?=$_SERVER['PHP_SELF']?>?i=<?=$i-1?>">anterior</a><?php }
			if ($i<55){ ?>	&nbsp;&nbsp;<a href="<?=$_SERVER['PHP_SELF']?>?i=<?=$i+1?>">siguiente</a><br><?php	}
		}
	} else {
		echo "<br><div class='mensaje0'>Error SQL [".mysql_error($con)."].</div>";
		exit;	
	}	
	
	//echo "<br>"; print_r($respuestas);	echo "<br>";
	$p1=0;	$p2=0;	$p3=0;	$p4=0;
	//echo "<br>".
	$sql="SELECT P".$i." FROM ".$tablaEncuestas;
	if ($res=mysql_query($sql,$con)){
		$ndr=mysql_num_rows($res);
		if ($ndr<=0){	echo "<br><div class='mensaje0'>No se encontraron resultados.</div>";  }
		while($reg=mysql_fetch_array($res)){
			//echo "<br>";	print_r($reg);
			if ($reg["P".$i]==1) $p1++;
			if ($reg["P".$i]==2) $p2++;
			if ($reg["P".$i]==3) $p3++;
			if ($reg["P".$i]==4) $p4++;
		}			
	} else {
		echo "<br><div class='mensaje0'>Error SQL [".mysql_error($con)."].</div>";
		exit;		
	}
	//echo "<br><br>$p1,$p2,$p3,$p4,$p5";
?>	
<table >
	<caption>Pregunta <?=$i?></caption>
	<thead>
		<tr>
			<td>.</td>
			<th>RESPUESTAS</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Totalmente de acuerdo</th>
			<td><?=$p1?></td>
		</tr>
		<tr>
			<th>De acuerdo</th>
			<td><?=$p2?></td>
		</tr>
		<tr>
			<th>En desacuerdo medio</th>
			<td><?=$p3?></td>
		</tr>
		<tr>
		  <th>En total desacuerdo</th>
		  <td><?=$p4?></td>
	        </tr>		
	</tbody>
</table>
</div>
</body>
</html>
