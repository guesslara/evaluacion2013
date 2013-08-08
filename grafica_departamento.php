<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Resultados por Departamento</title>
<script language="javascript" src="pie/jquery-1.3.1.min.js"></script>
<script language="javascript" src="pie/fgCharting.jQuery.js"></script>
<script language="javascript" src="pie/excanvas-compressed.js"></script>
<script language="javascript">
$(document).ready(function() {
	if($.browser.msie) { 
		setTimeout(function(){$.fgCharting();}, 2000);
	} else {
		$.fgCharting();
	}	
});

</script>		
<link href="pie/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
	print_r($_GET);
	$i=$_GET["i"];
	$d=$_GET["d"];
	//$i=1; $d="SISTEMAS";
	
	if (empty($i)||(!is_numeric($i))){ echo "<br>Error: El valor recibido no es una entrada valida. <a href='".$_SERVER['PHP_SELF']."?i=1'>regresar</a>."; exit; }
	include("conexion.php");
	require("config.inc");
	$respuestas=array("Totalmente de acuerdo","De acuerdo","En desacuerdo medio","En total desacuerdo");
	
	echo '<h2>Encuesta &quot;CLIMA LABORAL 2012&quot;.</h2>';
	//echo '<BR>'.
	$sql0="SELECT temas.tema,preguntas.id_pregunta,preguntas.pregunta FROM temas,preguntas WHERE temas.id_tema=preguntas.id_tema AND id_pregunta=$i  ";
	if ($res0=mysql_query($sql0,$con)){
		$ndr0=mysql_num_rows($res0);
		if ($ndr0<=0){	echo "<br><div class='mensaje0'>No se encontraron resultados.</div>";  }
		while($reg0=mysql_fetch_array($res0)){
			//echo "<br>";	print_r($reg0);
			echo "<br><b>Tema:</b> ".$reg0["tema"];
			echo "<br><b>Pregunta:</b> ".$reg0["id_pregunta"]." ".$reg0["pregunta"];
			echo "<br><b>Departamento:</b> ".$d;
			echo "<br>";
			//echo "<br><a href='".$_SERVER['PHP_SELF']."?i=".$i+1."'>Ver siguiente</a><br>";
			?><br><b>Ver:</b> <?php
			if ($i>1){ ?>	&nbsp;&nbsp;<a href="<?=$_SERVER['PHP_SELF']?>?i=<?=$i-1?>&d=<?=$d?>">anterior</a><?php } ?>
							&nbsp;&nbsp;<a href="departamentos.php">departamentos</a><?php
			if ($i<54){ ?>	&nbsp;&nbsp;<a href="<?=$_SERVER['PHP_SELF']?>?i=<?=$i+1?>&d=<?=$d?>">siguiente</a><br><?php	}
		}
	} else {
		echo "<br><div class='mensaje0'>Error SQL [".mysql_error($con)."].</div>";
		exit;	
	}	
	
	//echo "<br>"; print_r($respuestas);	echo "<br>";
	$p1=0;	$p2=0;	$p3=0;	$p4=0;
	//echo "<br>".
	echo $sql="SELECT P".$i." FROM ".$tablaEncuestas." WHERE departamento='$d' ";
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
<br /><table id="dataTable" summary="Resultados del departamento de <?=$d?>" style="float:left;">
	<!--<caption>Resultados del departamento de <?//$d?></caption>//-->
	<thead>
		<tr>
			<td>&nbsp;</td>
			<th id="2000">Resultados</th>
		</tr>
	</thead>
	<tfoot>
	</tfoot>
	<tbody>
		<tr>
			<th headers="members">Totalmente de acuerdo</th>
			<td headers="2000"><?=$p1?></td>
		</tr>
		<tr>
			<th headers="members">De acuerdo</th>
			<td headers="2000"><?=$p2?></td>
		</tr>
		<tr>
			<th headers="members">En desacuerdo medio</th>
			<td headers="2000"><?=$p3?></td>
		</tr>
		<tr>
		  <th headers="members">En total desacuerdo</th>
		  <td headers="2000"><?=$p4?></td>
	  </tr>
	</tbody>
</table>
<div class="chartBlock" style="position: relative; float:left;">
	<canvas id="chart1" class="fgCharting_src-dataTable_type-pie" width="400" height="400"></canvas>
</div>   
</body>
</html>
