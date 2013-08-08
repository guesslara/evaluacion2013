<?php 
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Content-Type: text/xml; charset=ISO-8859-1");
//print_r($_POST);	//echo "<br><hr>";
$ac=$_POST["accion"];

if ($ac=="graficar_general"){
	include("conexion.php");	
	$sql="SELECT * FROM encuestas ORDER BY id_per ";
	if ($res=mysql_query($sql,$con)){
		$ndr=mysql_num_rows($res);
		if ($ndr<=0){	echo "<br><div class='mensaje0'>No se encontraron resultados.</div>";  }
		?>
		<link type="text/css" rel="stylesheet" href="graf/demopage.css"/>
		<table>	
		<thead>
		<tr>
			<td>#</td>
			<th>departamento</th>
			<?php
			for ($i=1;$i<=55;$i++){
				$sql0="SELECT temas.tema,preguntas.pregunta FROM temas,preguntas WHERE temas.id_tema=preguntas.id_tema AND id_pregunta=$i  ";
				if ($res0=mysql_query($sql0,$con)){
					$ndr0=mysql_num_rows($res0);
					while($reg0=mysql_fetch_array($res0)){
						$titleX=" ".$reg0["tema"]." ".$reg0["pregunta"];
					}
				} else {
					echo "<br><div class='mensaje0'>Error SQL [".mysql_error($con)."].</div>";
					exit;	
				}				
				echo "<th><a href='graficar_respuesta.php?i=$i' title='Graficar la respuesta $i (".$titleX.").'>R$i</a></th>";
			}
			?>
		</tr>
		</thead>
		<tbody>
		<?php
		while($reg=mysql_fetch_array($res)){
			//echo "<br><br>";	print_r($reg);
			?>
			<tr>
				<th>Empleado<?=$reg["id_per"]?></th>
				<td><?=$reg["departamento"]?></td>
				<?php
				for ($i=1;$i<=55;$i++){
					echo "<td>".$reg["P".$i]."</td>";
				}
				?>					
			</tr>			
			<?php
		}			
		?>
		</tbody>
		</table>
		<?php

	} else {
		echo "<br><div class='mensaje0'>Error SQL [".mysql_error($con)."].</div>";
		exit;		
	}
}



if ($ac=="graficar_pregunta"){
	$ndp=55;
	for($i=1;$i<=55;$i++){
		echo "<br><a href=\"javascript:ajax('div_datos','accion=graficar_preguntax&idp=$i');  \">Graficar pregunta $i</a> ";
	}
}
if ($ac=="estadisticas"){
	include("conexion.php");
	require("config.inc");
	$sql="SELECT COUNT( * ) AS  `total_encuestados` FROM ".$tablaEncuestas;
	$res=mysql_query($sql);
	$reg=mysql_fetch_array($res);
	echo "<br><h4>Estad&iacute;sticas Generales. </h4><br />Total de encuestados: ".$nde=$reg["total_encuestados"];
	
	$sql2="SELECT COUNT( * ) AS  `Filas` ,  `departamento` FROM ".$tablaEncuestas." GROUP BY  `departamento` ORDER BY  `departamento` ";
	$res2=mysql_query($sql2);
	?>
	
	<br /><br /><table style="font-size:12px; border:#999999 1px solid;" align="center" cellpadding="7">
	<tr style="text-align:center; font-weight:bold;">
	  <td>departamento</td>
	  <td>no. encuestados</td>
	</tr>
	<?php
	$c="#ffffff";
	while($reg2=mysql_fetch_array($res2)){
		//echo "<br>";	print_r($reg2);
		?>
		<tr bgcolor="<?=$c?>">
		  <td align="left"><?=$reg2["departamento"]?></td>
		  <td align="right"><?=$reg2["Filas"]?></td>
		</tr>		
		<?php
		($c=="#ffffff")? $c="#efefef" : $c="#ffffff";
	}
	?>
	</table>
	<?php	
	//echo "<br>Total de encuestados: ".$nde=$reg["total_encuestados"];	
}
?>