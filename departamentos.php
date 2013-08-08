<?php 
	include("conexion.php");
	require("config.inc");
	$sql="SELECT departamento FROM ".$tablaEncuestas." GROUP BY departamento ORDER BY departamento;";
	$res=mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<a href="estadisticas.php">volver</a>
<h3>Departamentos</h3>
<ul>
<?php 
	while($reg=mysql_fetch_array($res)){
		//echo "<br>";	print_r($reg);
		?><li><a href="grafica_departamento.php?d=<?=$reg["departamento"]?>&i=1"><?=$reg["departamento"]?></a></li><?php
	}
?>
</ul>

</body>
</html>
