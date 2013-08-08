<?php
session_start();
//$_SESSION["indice_actual"]=0;
if ($_POST["action"]=="cuestionario2"){
	array_push($_SESSION["respuestas_globales"],$_POST["P1"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P2"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P3"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P4"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P5"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P6"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P7"]);
	//echo "<br>br>Preguntas 1-7=";	print_r($_SESSION);	echo "<br>br>";
}
if ($_POST["action"]=="cuestionario3"){
	array_push($_SESSION["respuestas_globales"],$_POST["P8"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P9"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P10"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P11"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P12"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P13"]);	
	//echo "<br>br>Preguntas 8-13=";	print_r($_SESSION); 	echo "<br>br>";
}
if ($_POST["action"]=="cuestionario4"){
	array_push($_SESSION["respuestas_globales"],$_POST["P14"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P15"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P16"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P17"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P18"]);
	//echo "<br>br>Preguntas 14-18=";	print_r($_SESSION); 	echo "<br>br>";
}

if ($_POST["action"]=="cuestionario5"){
	array_push($_SESSION["respuestas_globales"],$_POST["P19"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P20"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P21"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P22"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P23"]);
	//echo "<br>br>Preguntas 19-23=";	print_r($_SESSION); 	echo "<br>br>";
}
if ($_POST["action"]=="cuestionario6"){
	array_push($_SESSION["respuestas_globales"],$_POST["P24"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P25"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P26"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P27"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P28"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P29"]);	
	//echo "<br>br>Preguntas 24-29=";	print_r($_SESSION); 	echo "<br>br>";
}
if ($_POST["action"]=="cuestionario7"){
	array_push($_SESSION["respuestas_globales"],$_POST["P30"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P31"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P32"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P33"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P34"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P35"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P36"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P37"]);
	//echo "<br>br>Preguntas 30-37=";	print_r($_SESSION); 	echo "<br>br>";
}
if ($_POST["action"]=="cuestionario8"){
	array_push($_SESSION["respuestas_globales"],$_POST["P38"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P39"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P40"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P41"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P42"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P43"]);	
	//echo "<br>br>Preguntas 38-43=";	print_r($_SESSION); 	echo "<br>br>";
}
if ($_POST["action"]=="cuestionario9"){
	array_push($_SESSION["respuestas_globales"],$_POST["P44"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P45"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P46"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P47"]);	
	//echo "<br>br>Preguntas 44-47=";	print_r($_SESSION); 	echo "<br>br>";
}
if ($_POST["action"]=="cuestionario10"){
	array_push($_SESSION["respuestas_globales"],$_POST["P48"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P49"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P50"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P51"]);	
	//echo "<br>br>Preguntas 48-51=";	print_r($_SESSION); 	echo "<br>br>";
}
if ($_POST["action"]=="gracias"){
	array_push($_SESSION["respuestas_globales"],$_POST["P52"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P53"]);	
	array_push($_SESSION["respuestas_globales"],$_POST["P54"]);
	array_push($_SESSION["respuestas_globales"],$_POST["P55"]);
	//echo "<br>br>Preguntas 30-37=";	print_r($_SESSION); 	echo "<br>br>";
	$tdp=55;
	$ndpr=count($_SESSION["respuestas_globales"]);
	$sql_valores="";
	foreach ($_SESSION["respuestas_globales"] as $idp){
		//echo " $idp";
		if ($sql_valores==""){
			$sql_valores="'$idp'";
		}else{
			$sql_valores.=",'$idp'";		
		}
	}
	//echo "<br>".
	$insert="insert into encuestas2009 (P1,P2,P3,P4,P5,P6,P7,P8,P9,P10,P11,P12,P13,P14,P15,P16,P17,P18,P19,P20,P21,P22,P23,P24,P25,P26,P27,P28,P29,P30,P31,P32,P33,P34,P35,P36,P37,P38,P39,P40,P41,P42,P43,P44,P45,P46,P47,P48,P49,P50,P51,P52,P53, P54,P55, departamento) values ($sql_valores,'".$_POST['departamento']."')";
	require("conexion.php");
	if (mysql_query($insert,$con)){
		echo "<br>Datos Guardados.<br>";
		session_destroy();
	}else{
		echo "<br>Error en la Aplicaci&oacute;n <br>";
		echo mysql_error($con);
	}
}
/*<!--if ($_POST["action"]=="gracias"){	
	$
}

-->*/
//include 'conexion.php';
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.
if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:
	$ac=$_POST["action"];//La accion se guarda en la variable $ac.
	if ($ac=="presentacion"){	
?>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #0000FF;
	font-size: 24px;
}
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.Estilo3 {
	font-size: 24px;
	font-weight: bold;
}
.Estilo4 {
	font-size: 10px;
	font-weight: bold;
}
.Estilo5 {font-size: 18px}
.Estilo6 {
	font-size: 16px;
	font-weight: bold;
}
.Estilo7 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo8 {font-size: 16px}
.Estilo9 {
	font-size: 16px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.x {
	text-align: center;
}
#Mensaje .Estilo2 {
	text-align: center;
}
-->
</style>
<form>
<div align="center">
	<div id="cabecera" style="border: 1px solid #000000;">
   <table width="100%" height="108" border="1">
   <tr>
   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>
   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>
   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>
   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:
     </p>
     <p class="Estilo5">23/11/09 </p></td>
   </tr>
   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>
   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>
     <p class="Estilo5">1 DE 14 </p></td>
   </table>
   </div>
<div id="Mensaje" style="size:900px; border:2 px solid #000000;" >
	 <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p align="center" class="Estilo1">Encuesta Laboral 2012</p>
	 <p align="center" class="Estilo2">&nbsp;</p>
<p align="justify" class="Estilo2">&nbsp;</p>
	   <p align="justify" class="Estilo2"></p>
    </div>
  </div>
	<p align="center"><a href="javascript:ajax('div_resultados','action=objetivo','div_presentacion');" style="font-size:30px; color:#06F; text-decoration:none;">Iniciar la Encuesta</a></p>
	<p align="center">&nbsp;</p>
</form>
<?php
	}
}

?>
<!--#############################################################################-->

<?php
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:

	$ac=$_POST["action"];//La accion se guarda en la variable $ac.

	if ($ac=="objetivo"){	

?>
<style type="text/css">
<!--
.Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;color: #0000FF;font-size: 24px;}
.Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 18px;}
.Estilo3 {font-size: 24px;font-weight: bold;}
.Estilo4 {font-size: 10px;font-weight: bold;}
.Estilo5 {font-size: 18px}
-->
</style>
<div align="center" id="presentacion">
	<div id="cabecera" style="border: 1px solid #000000;">
   <form id="fvalida" name="form" method="post" action="">
   <table width="100%" height="108" border="1">
   <tr>
   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>
   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>
   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>
   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:
     </p>
     <p class="Estilo5">23/11/09 </p></td>
   </tr>
   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>
   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>
     <p class="Estilo5">2 DE 14 </p></td>
   
   </table>
   </form>
   </div>
<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >
 <p>&nbsp;</p>
    <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p align="center" class="Estilo1">Ay&uacute;denos a mejorar</p>
	 <p align="justify" class="Estilo2"> Por favor, dedique unos minutos a completar esta encuesta, la informaci&oacute;n que nos proporcione ser&aacute; utilizada para evaluar el nivel de satisfacci&oacute;n general de nuestros empleados con la empresa.</p>
	   
    <p align="justify" class="Estilo2">Sus respuestas ser&aacute;n tratadas de forma CONFIDENCIAL Y AN&Oacute;NIMA y no ser&aacute;n utilizadas para ning&uacute;n prop&oacute;sito distinto al de ayudarnos a mejorar.
	   Esta encuesta dura aproximadamente 10 minutos.</p>
   <p align="justify" class="Estilo2">&nbsp;</p>
   <p align="justify" class="Estilo2"></p>
    <p align="center"><a href="javascript:ajax('div_resultados','action=instrucciones','div_presentacion');" style="font-size:30px; color:#06F; text-decoration:none;">Siguiente</a></p>
</div>
<?php
}
}
?>
<!--###################################################################################-->

<?php
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.
if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:
	$ac=$_POST["action"];//La accion se guarda en la variable $ac.
	if ($ac=="instrucciones"){	
?>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #0000FF;
	font-size: 24px;
}
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.Estilo3 {
	font-size: 24px;
	font-weight: bold;
}
.Estilo4 {
	font-size: 10px;
	font-weight: bold;
}
.Estilo5 {font-size: 18px}
-->
</style>



<div align="center" id="presentacion">

	<div id="cabecera" style="border: 1px solid #000000;">

   <form id="fvalida" name="form" method="post" action="">

   <table width="100%" height="108" border="1">

   <tr>

   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>

   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>

   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>

   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:

     </p>

     <p class="Estilo5">23/11/09 </p></td>

   </tr>

   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>

   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>

     <p class="Estilo5">3 DE 14 </p></td>

   

   </table>

   </form>

   </div>

<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >
<p>&nbsp;</p>
<p>&nbsp;</p>
	 <p align="center" class="Estilo1">Introducci&oacute;n</p>
<p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">Una de las inquietudes más importantes que existen en IQ International, es la relativa al ambiente de trabajo y clima interno en que se desenvuelven los empleados y trabajadores.</p>
<p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">Para la empresa, es de suma importancia ayudar a crear y mantener un lugar de trabajo gratificante que satisfaga y enorgullezca al personal.</p>
<p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">Gran parte de la vida de las personas se dedica al trabajo. Hacerlo en un lugar grato, es un compromiso y preocupación constante en la empresa, y se está convirtiendo en un objetivo institucional.</p>
<p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">Es por ello que estamos instituyendo esta Encuesta de Clima Interno, con el afán de conocer el pensar, sentir y desear del personal, y así poder implementar acciones que cumplan con este objetivo citado.</p>
<p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">La encuesta es anónima, no será necesario que anoten su nombre.</p>
<p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">Todas las respuestas serán tratadas como confidenciales. No existe la posibilidad de identificar a nadie. Estas respuestas no serán vistas por persona alguna dentro de la empresa. No se realizará ningún informe para grupos integrados por menos de cinco personas, de tal manera que no se podrá deducir quién fue el que dio tal o cual respuesta. </p>
<p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">Las respuestas de cada persona son sumamente importantes. Por favor conteste todas las preguntas en forma exacta, cuidadosa y honesta.</p>
<p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">Cada reactivo deberá contestarse con datos numéricos de acuerdo al baremo siguiente:</p>
<div style="margin:10px; font-weight:bold;font-size: 14px;text-align: left;">
	<table width="250" border="0" cellpading="1" cellspacing="1">
		<tr>
			<td width="200">Totalmente de acuerdo</td>
			<td width="50" style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>De acuerdo</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>En desacuerdo medio</td>
			<td style="text-align: center;">2</td>
		</tr>
		<tr>
			<td>En total desacuerdo</td>
			<td style="text-align: center;">1</td>
		</tr>
	</table>
</div>
<p align="justify" class="Estilo2" style="margin-top: 10px;text-align: justify;width: 98%;">No se trata de contestar lo que quisiera o piensa que debiera ser. Por favor conteste como considera que HOY por HOY, son las cosas en IQ International.</p>
<p align="center" class="Estilo1">ENCUESTA LABORAL</p></p>
<p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">No escriba su nombre, le rogamos contestar con toda sinceridad las preguntas que se encuentran abajo. La forma de contestar es la siguiente:</p>
<p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">Lea la pregunta e inmediatamente después seleccione la respuesta que usted crea conveniente. Subraye la letra que corresponda a la respuesta que más se asemeje a lo que usted piensa.</p>
<p>&nbsp;</p>
       <p align="center"><a href="javascript:ajax('div_resultados','action=cuestionerio1','div_presentacion');" style="font-size:30px; color:#06F; text-decoration:none;">Siguiente</a></p>

</div>

<?php
	}
}

?>
<!--###################################################################################-->

<?php

//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

function muestraTemaTitulo($tema){
	require("conexion.php");
	$sql="select * from temas where id_tema='".$tema."'";
	$res=mysql_query($sql,$con);
	$row=mysql_fetch_array($res);
	return $row["tema"];
}
function devuelveNumeroTotalPreguntas($tema){
	require("conexion.php"); $cadena="";
	$sqlTP="select * from preguntas where id_tema='".$tema."'";
	$resTP=mysql_query($sqlTP,$con);	
	$totalPreguntas=mysql_num_rows($resTP);
	for($j=0;$j<$totalPreguntas;$j++){
		if($cadena==""){
			$cadena="0";
		}else{
			$cadena=$cadena.",0";
		}
	}
	return $cadena;
}
function regresaPreguntasTema($tema){
	require("conexion.php");
	$sqlP="select * from preguntas where id_tema='".$tema."'";
	$resP=mysql_query($sqlP,$con);
	return $resP;
}

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:

	$ac=$_POST["action"];//La accion se guarda en la variable $ac.

	if ($ac=="cuestionerio1"){
		$cadena=devuelveNumeroTotalPreguntas(1);
		
?>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #0000FF;
	font-size: 24px;
}
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.Estilo3 {
	font-size: 24px;
	font-weight: bold;
}
.Estilo4 {
	font-size: 10px;
	font-weight: bold;
}
.Estilo5 {font-size: 18px}
-->
</style>
<script language="javascript">	
preguntas=new Array(<?=$cadena?>);
function actualiza(oRad,n){
	var valor_actual=oRad.value;
	//alert("N ["+n+"] \nValor actual ["+valor_actual+"]");
	preguntas[n-1]=valor_actual;
}
function valida_envia(){
	for(var i=0;i<preguntas.length;i++){
		if (preguntas[i]==0){
			alert("Error: la pregunta ("+parseInt(i+1)+") no ha sido respondida. ");
			return;
		}
	}
	if(confirm("Desea continuar?")){
		alert('action=cuestionario2&P1='+preguntas[0]+'&P2='+preguntas[1]+'&P3='+preguntas[2]+'&P4='+preguntas[3]+'&P5='+preguntas[4]+'&P6='+preguntas[5]+'&P7='+preguntas[6]+'&P8='+preguntas[7]);
		ajax('div_resultados','action=cuestionario2&P1='+preguntas[0]+'&P2='+preguntas[1]+'&P3='+preguntas[2]+'&P4='+preguntas[3]+'&P5='+preguntas[4]+'&P6='+preguntas[5]+'&P7='+preguntas[6]+'&P8='+preguntas[7]);
	}
	
}	
	/*
	if(confirm("Desea Guardar Las Modificaciones Realizadas a la Requisicion?")){
		//ocultar();
	<a href="javascript:ajax('div_resultados','action=cuestionario2','div_presentacion');">Siguiente >></a>
	}
	
}
*/
</script>
<div align="center" id="presentacion">
	<div id="cabecera" style="border: 1px solid #000000;">
   <form id="fvalida" name="form" method="post" action="">
   <table width="100%" height="108" border="1">
   <tr>
   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>
   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>
   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>
   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:
     </p>
     <p class="Estilo5">23/11/09 </p></td>
   </tr>
   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>
   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>
     <p class="Estilo5">4 DE 14 </p></td>
 </table>
  </form>
   </div>
<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >
	 <p align="left" class="Estilo1"><? echo muestraTemaTitulo(1);?></p>
	 <p style="margin:8px; text-align:justify;">&nbsp;</p>
     <div align="center" id="div">
<?
	$resP1=regresaPreguntasTema(1);
?>
       <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >
         <tr>
           <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>Preguntas</strong></span></td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">En Total desacuerdo</td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">En desacuerdo medio</td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">De acuerdo</td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">Totalmente de acuerdo</td>           
         </tr>
<?
	$i=1;
	while($rowP1=mysql_fetch_array($resP1)){
		$nombreRadio="P".$i;
?>
	<tr>
           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong><? echo $i."- ".utf8_encode($rowP1["pregunta"]);?></strong></td>
           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="1" onclick="actualiza(this,<?=$i;?>)" /></td>
           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="2" onclick="actualiza(this,<?=$i;?>)" /></td>
           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="3" onclick="actualiza(this,<?=$i;?>)" /></td>
           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="4" onclick="actualiza(this,<?=$i;?>)" /></td>           
        </tr>
<?
		$i+=1;
	}
?>         
       </table>
</div>
         <td><p align="right" style="margin-right:10px;"><a href="javascript:valida_envia();" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p></td>
</div>
<?php
	}//Fin IF
}

?>
<!--###################################################################################-->

<?php
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:
	$ac=$_POST["action"];//La accion se guarda en la variable $ac.
	if ($ac=="cuestionario2"){
		$cadena=devuelveNumeroTotalPreguntas(2);
?>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #0000FF;
	font-size: 24px;
}
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.Estilo3 {
	font-size: 24px;
	font-weight: bold;
}
.Estilo4 {
	font-size: 10px;
	font-weight: bold;
}
.Estilo5 {font-size: 18px}
-->
</style>
<script language="javascript">
preguntas2=new Array(<?=$cadena;?>);
function actualiza2(oRad,n){
	var valor_actual2=oRad.value;
	//alert("N ["+n+"] \nValor actual2 ["+valor_actual2+"]");
	preguntas2[n-8]=valor_actual2;
}
function valida_envia2(){
	for(var i=0;i<preguntas2.length;i++){
		//alert(preguntas2[i]);
		if (preguntas2[i]==0){
			alert("Error: la pregunta ("+parseInt(i+8)+") no ha sido respondida. ");
		return;
		}
	}
	if(confirm("Desea continuar?")){
	ajax('div_resultados','action=cuestionario3&P8='+preguntas2[0]+'&P9='+preguntas2[1]+'&P10='+preguntas2[2]+'&P11='+preguntas2[3]+'&P12='+preguntas2[4]+'&P13='+preguntas2[5]);
	}
	
}	
</script>
<div align="center" id="presentacion">
	<div id="cabecera" style="border: 1px solid #000000;">
   <form id="fvalida" name="form" method="post" action="">
   <table width="100%" height="108" border="1">
   <tr>
   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>
   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>
   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>
   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:
     </p>
     <p class="Estilo5">23/11/09 </p></td>
   </tr>
   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>
   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>
     <p class="Estilo5">5 DE 14 </p></td>
   
   </table>
   </form>
  </div>
<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >
	 <p align="left" class="Estilo1"><strong><? echo muestraTemaTitulo(2);?></strong></p>
	 <p align="justify" class="Estilo7 Estilo8">&nbsp;</p>
	 <p style="margin:8px; text-align:justify;">&nbsp;</p>
	 <div align="center" id="div">       
<?
	$resP2=regresaPreguntasTema(2);
?>
       <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >
         <tr>
           <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>Preguntas</strong></span></td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">En Total desacuerdo</td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">En desacuerdo medio</td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">De acuerdo</td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">Totalmente de acuerdo</td>           
         </tr>
<?
	$i=9;
	while($rowP2=mysql_fetch_array($resP2)){
		$nombreRadio="P".$i;
?>
	<tr>
           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong><? echo $i."- ".utf8_encode($rowP2["pregunta"]);?></strong></td>
           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="1" onclick="actualiza(this,<?=$i;?>)" /></td>
           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="2" onclick="actualiza(this,<?=$i;?>)" /></td>
           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="3" onclick="actualiza(this,<?=$i;?>)" /></td>
           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="4" onclick="actualiza(this,<?=$i;?>)" /></td>           
        </tr>
<?
		$i+=1;
	}
?>         
       </table>
  </div>
      <td><p align="right" style="margin-right:10px;"><a href="javascript:valida_envia2()" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p></td>

</div>

<?php
	}
}

?>
<!--###################################################################################-->

<?php
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:
	$ac=$_POST["action"];//La accion se guarda en la variable $ac.
	if ($ac=="cuestionario3"){	
?>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #0000FF;
	font-size: 24px;
}
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.Estilo3 {
	font-size: 24px;
	font-weight: bold;
}
.Estilo4 {
	font-size: 10px;
	font-weight: bold;
}
.Estilo5 {font-size: 18px}
-->
</style>
<script language="javascript">
preguntas3=new Array(0,0,0,0,0);
function actualiza3(oRad,n){
	var valor_actual3=oRad.value;
	//alert("N ["+n+"] \nValor actual3 ["+valor_actual3+"]");
	preguntas3[n-14]=valor_actual3;
}
function valida_envia3(){
	//alert('ok3');
	
	for(var i=0;i<preguntas3.length;i++){
		//alert(preguntas3[i]);
		if (preguntas3[i]==0){
			alert("Error: la pregunta ("+parseInt(i+14)+") no ha sido respondida. ");
			return;
		}
	}
	if(confirm("Desea continuar?")){
		ajax('div_resultados','action=cuestionario4&P14='+preguntas3[0]+'&P15='+preguntas3[1]+'&P16='+preguntas3[2]+'&P17='+preguntas3[3]+'&P18='+preguntas3[4]);
	}
	
}	
</script>


<div align="center" id="presentacion">

	<div id="cabecera" style="border: 1px solid #000000;">

   <form id="fvalida" name="form" method="post" action="">

   <table width="100%" height="108" border="1">

   <tr>

   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>

   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>

   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>

   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:

     </p>

     <p class="Estilo5">23/11/09 </p></td>

   </tr>

   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>

   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>

     <p class="Estilo5">6 DE 14 </p></td>

   

   </table>

   </form>

   </div>

<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >

	 <p align="left" class="Estilo1"><strong><? echo muestraTemaTitulo(3);?></strong></p>

	 <p align="justify" class="Estilo7 Estilo8">&nbsp;</p>

	 <p style="margin:8px; text-align:justify;">&nbsp;</p>

	 <div align="center" id="div">
<?
	$resP3=regresaPreguntasTema(3);
?>
       <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >
         <tr>
           <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>Preguntas</strong></span></td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">En Total desacuerdo</td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">En desacuerdo medio</td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">De acuerdo</td>
           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">Totalmente de acuerdo</td>           
         </tr>
<?
	$i=1;
	while($rowP3=mysql_fetch_array($resP3)){
		$nombreRadio="P".$i;
?>
	<tr>
           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong><?=utf8_encode($rowP3["pregunta"]);?></strong></td>
           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="1" onclick="actualiza(this,<?=$i;?>)" /></td>
           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="2" onclick="actualiza(this,<?=$i;?>)" /></td>
           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="3" onclick="actualiza(this,<?=$i;?>)" /></td>
           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="4" onclick="actualiza(this,<?=$i;?>)" /></td>           
        </tr>
<?
		$i+=1;
	}
?>         
       </table>

  </div>
 <td><p align="right" style="margin-right:10px;"><a href="javascript:valida_envia3()" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p></td>
</div>

<?php
	}
}

?>
<!--###################################################################################-->

<?php
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:

	$ac=$_POST["action"];//La accion se guarda en la variable $ac.

	if ($ac=="cuestionario4"){	

?>

<style type="text/css">

<!--

.Estilo1 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

	color: #0000FF;

	font-size: 24px;

}

.Estilo2 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 18px;

}

.Estilo3 {

	font-size: 24px;

	font-weight: bold;

}

.Estilo4 {

	font-size: 10px;

	font-weight: bold;

}

.Estilo5 {font-size: 18px}

-->

</style>
<script language="javascript">
preguntas4=new Array(0,0,0,0,0);
function actualiza4(oRad,n){
	var valor_actual4=oRad.value;
	//alert("N ["+n+"] \nValor actual4 ["+valor_actual4+"]");
	preguntas4[n-19]=valor_actual4;
}
function valida_envia4(){
	//alert('ok3');
	
	for(var i=0;i<preguntas4.length;i++){
		//alert(preguntas4[i]);
		if (preguntas4[i]==0){
			alert("Error: la pregunta ("+parseInt(i+19)+") no ha sido respondida. ");
			return;
		}
	}
	if(confirm("Desea continuar?")){
		ajax('div_resultados','action=cuestionario5&P19='+preguntas4[0]+'&P20='+preguntas4[1]+'&P21='+preguntas4[2]+'&P22='+preguntas4[3]+'&P23='+preguntas4[4]);
	}
	
}	
</script>


<div align="center" id="presentacion">

	<div id="cabecera" style="border: 1px solid #000000;">

   <form id="fvalida" name="form" method="post" action="">

   <table width="100%" height="108" border="1">

   <tr>

   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>

   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>

   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>

   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:

     </p>

     <p class="Estilo5">23/11/09 </p></td>

   </tr>

   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>

   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>

     <p class="Estilo5">7 DE 14 </p></td>

   

   </table>

   </form>

   </div>

<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >

	 <p align="left" class="Estilo1"><strong>Posibilidades de creatividad e iniciativa </strong></p>

	 <p align="justify" class="Estilo7 Estilo8">4.  &iquest;Considera usted que... </p>

	 <p style="margin:8px; text-align:justify;">&nbsp;</p>

	 <div align="center" id="div">

       <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >

         <tr>

           <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>Preguntas</strong></span></td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">No, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">Si / No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">S&iacute;, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> S&iacute;</td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>...  tiene la suficiente autonom&iacute;a en su trabajo? </strong></td>

		   

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"> 

             <label>

               <input name="P19" type="radio" value="1" onclick="actualiza4(this,19)" />

             </label>                  </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

             <input name="P19" type="radio" value="2" onclick="actualiza4(this,19)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P19" type="radio" value="3" onclick="actualiza4(this,19)" />

             </label>                 </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P19" type="radio" value="4" onclick="actualiza4(this,19)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P19" type="radio" value="5" onclick="actualiza4(this,19)" />

             </label>                     </td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>...  tiene la suficiente capacidad de iniciativa en su trabajo? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P20" type="radio" value="1" onclick="actualiza4(this,20)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P20" type="radio" value="2" onclick="actualiza4(this,20)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P15" type="radio" value="3" onclick="actualiza4(this,20)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P20" type="radio" value="4" onclick="actualiza4(this,20)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P20" type="radio" value="5" onclick="actualiza4(this,20)" /></td>

         </tr>

         <tr>

           <td class="style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><table border="0" cellspacing="0" cellpadding="0">

             <tr>

               <td class="Estilo9"><p>...sus  ideas son escuchadas por su jefe o superiores? </p></td>

             </tr>

           </table></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P21" type="radio" value="1" onclick="actualiza4(this,21)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P21" type="radio" value="2" onclick="actualiza4(this,21)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P21" type="radio" value="3" onclick="actualiza4(this,21)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P21" type="radio" value="4" onclick="actualiza4(this,21)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P21" type="radio" value="5" onclick="actualiza4(this,21)" /></td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Se  siente realizado en su trabajo? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P22" type="radio" value="1" onclick="actualiza4(this,22)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P22" type="radio" value="2" onclick="actualiza4(this,22)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P22" type="radio" value="3" onclick="actualiza4(this,22)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P22" type="radio" value="4" onclick="actualiza4(this,22)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P22" type="radio" value="5" onclick="actualiza4(this,22)" /></td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><p align="left"><strong>...su  trabajo es lo suficientemente variado?</strong></p></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P23" type="radio" value="1" onclick="actualiza4(this,23)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P23" type="radio" value="2" onclick="actualiza4(this,23)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P23" type="radio" value="3" onclick="actualiza4(this,23)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P23" type="radio" value="4" onclick="actualiza4(this,23)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P23" type="radio" value="5" onclick="actualiza4(this,23)" /></td>

         </tr>

       </table>

  </div>
<td><p align="right" style="margin-right:10px;"><a href="javascript:valida_envia4();" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p></td>
</div>

<?php
	}
}

?>
<!--###################################################################################-->

<?php
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:

	$ac=$_POST["action"];//La accion se guarda en la variable $ac.

	if ($ac=="cuestionario5"){	

?>

<style type="text/css">

<!--

.Estilo1 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

	color: #0000FF;

	font-size: 24px;

}

.Estilo2 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 18px;

}

.Estilo3 {

	font-size: 24px;

	font-weight: bold;

}

.Estilo4 {

	font-size: 10px;

	font-weight: bold;

}

.Estilo5 {font-size: 18px}

-->

</style>

<script language="javascript">
preguntas5=new Array(0,0,0,0,0,0);
function actualiza5(oRad,n){
	var valor_actual5=oRad.value;
	//alert("N ["+n+"] \nValor actual5 ["+valor_actual5+"]");
	preguntas5[n-24]=valor_actual5;
}
function valida_envia5(){
	//alert('ok3');
	
	for(var i=0;i<preguntas5.length;i++){
		//alert(preguntas5[i]);
		if (preguntas5[i]==0){
			alert("Error: la pregunta ("+parseInt(i+24)+") no ha sido respondida. ");
			return;
		}
	}
	if(confirm("Desea continuar?")){
		ajax('div_resultados','action=cuestionario6&P24='+preguntas5[0]+'&P25='+preguntas5[1]+'&P26='+preguntas5[2]+'&P27='+preguntas5[3]+'&P28='+preguntas5[4]+'&P29='+preguntas5[5]);
	}
	
}	
</script>

<div align="center" id="presentacion">

	<div id="cabecera" style="border: 1px solid #000000;">

   <form id="fvalida" name="form" method="post" action="">

   <table width="100%" height="108" border="1">

   <tr>

   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>

   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>

   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>

   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:

     </p>

     <p class="Estilo5">23/11/09 </p></td>

   </tr>

   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>

   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>

     <p class="Estilo5">8 DE 14 </p></td>

   

   </table>

   </form>

   </div>

<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >

	 <p align="left" class="Estilo1"><strong>Compa&ntilde;eros de trabajo </strong></p>

	 <p align="justify" class="Estilo7 Estilo8">5.  Acerca de sus compa&ntilde;eros de trabajo: </p>

	 <p style="margin:8px; text-align:justify;">&nbsp;</p>

	 <div align="center" id="div">

       <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >

         <tr>

           <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>Preguntas</strong></span></td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">No, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">Si / No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">S&iacute;, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> S&iacute;</td>

         </tr>
         <tr>

           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Se  lleva Usted bien con sus compa&ntilde;eros? </strong></td>

		   

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"> 

             <label>

               <input name="P24" type="radio" value="1" onclick="actualiza5(this,24)" />

             </label>                  </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

             <input name="P24" type="radio" value="2" onclick="actualiza5(this,24)" />


             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P24" type="radio" value="3" onclick="actualiza5(this,24)" />

             </label>                 </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P24" type="radio" value="4" onclick="actualiza5(this,24)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P24" type="radio" value="5" onclick="actualiza5(this,24)" />

             </label>                     </td>

         </tr>

         <tr>

           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Le  ayudaron y apoyaron los primeros d&iacute;as cuando usted entr&oacute; en la empresa? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P25" type="radio" value="1" onclick="actualiza5(this,25)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P25" type="radio" value="2" onclick="actualiza5(this,25)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P25" type="radio" value="3" onclick="actualiza5(this,25)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P25" type="radio" value="4" onclick="actualiza5(this,25)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P25" type="radio" value="5" onclick="actualiza5(this,25)" /></td>

         </tr>

         <tr>

           <td class="style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><table border="0" cellspacing="0" cellpadding="0">

             <tr>

               <td class="Estilo9"><p>&iquest;Si  dejase la empresa, lo sentir&iacute;a por ellos? </p></td>

             </tr>

           </table></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P26" type="radio" value="1" onclick="actualiza5(this,26)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P26" type="radio" value="2"  onclick="actualiza5(this,26)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P26" type="radio" value="3"  onclick="actualiza5(this,26)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P26" type="radio" value="4"  onclick="actualiza5(this,26)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P26" type="radio" value="5"  onclick="actualiza5(this,26)" /></td>

         </tr>

         <tr>

           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Cree  que Usted y sus compa&ntilde;eros est&aacute;n unidos y se llevan bien? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P27" type="radio" value="1"  onclick="actualiza5(this,27)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P27" type="radio" value="2" onclick="actualiza5(this,27)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P27" type="radio" value="3" onclick="actualiza5(this,27)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P27" type="radio" value="4" onclick="actualiza5(this,27)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P27" type="radio" value="5" onclick="actualiza5(this,27)" /></td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><p align="left"><strong>&iquest;Considera  que sus compa&ntilde;eros son adem&aacute;s sus amigos? </strong></p></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P28" type="radio" value="1" onclick="actualiza5(this,28)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P28" type="radio" value="2" onclick="actualiza5(this,28)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P28" type="radio" value="3" onclick="actualiza5(this,28)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P28" type="radio" value="4" onclick="actualiza5(this,28)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P28" type="radio" value="5" onclick="actualiza5(this,28)" /></td>

         </tr>

         <tr>

           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Existe  mucha movilidad y cambio de puestos de trabajo entre sus compa&ntilde;eros en la  empresa?</strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P29" type="radio" value="1" onclick="actualiza5(this,29)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P29" type="radio" value="2" onclick="actualiza5(this,29)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P29" type="radio" value="3" onclick="actualiza5(this,29)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P29" type="radio" value="4" onclick="actualiza5(this,29)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P29" type="radio" value="5" onclick="actualiza5(this,29)"  /></td>

         </tr>

       </table>

  </div>
<td><p align="right" style="margin-right:10px;"><a href="javascript:valida_envia5();" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p></td>

</div>

<?php
	}
}

?>
<!--###################################################################################-->

<?php
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:

	$ac=$_POST["action"];//La accion se guarda en la variable $ac.

	if ($ac=="cuestionario6"){	

?>

<style type="text/css">

<!--

.Estilo1 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

	color: #0000FF;

	font-size: 24px;

}

.Estilo2 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 18px;

}

.Estilo3 {

	font-size: 24px;

	font-weight: bold;

}

.Estilo4 {

	font-size: 10px;

	font-weight: bold;

}

.Estilo5 {font-size: 18px}

-->

</style>
<script language="javascript">
preguntas6=new Array(0,0,0,0,0,0,0,0);
function actualiza6(oRad,n){
	var valor_actual6=oRad.value;
	//alert("N ["+n+"] \nValor actual4 ["+valor_actual4+"]");
	preguntas6[n-30]=valor_actual6;
}
function valida_envia6(){
	//alert('ok3');
	
	for(var i=0;i<preguntas6.length;i++){
		//alert(preguntas4[i]);
		if (preguntas6[i]==0){
			alert("Error: la pregunta ("+parseInt(i+30)+") no ha sido respondida. ");
			return;
		}
	}
	if(confirm("Desea continuar?")){
		ajax('div_resultados','action=cuestionario7&P30='+preguntas6[0]+'&P31='+preguntas6[1]+'&P32='+preguntas6[2]+'&P33='+preguntas6[3]+'&P34='+preguntas6[4]+'&P35='+preguntas6[5]+'&P36='+preguntas6[5]+'&P37='+preguntas6[5]);
	}
	
}	
</script>


<div align="center" id="presentacion">

	<div id="cabecera" style="border: 1px solid #000000;">

   <form id="fvalida" name="form" method="post" action="">

   <table width="100%" height="108" border="1">

   <tr>

   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>

   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>

   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>

   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:

     </p>

     <p class="Estilo5">23/11/09 </p></td>

   </tr>

   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>

   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>

     <p class="Estilo5">9 DE 14 </p></td>

   

   </table>

   </form>

   </div>

<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >

	 <p align="left" class="Estilo1"><strong>Jefe y Superiores </strong></p>

	 <p align="justify" class="Estilo7 Estilo8">6.  Sobre su jefe y superiores: </p>

	 <p style="margin:8px; text-align:justify;">&nbsp;</p>

	 <div align="center" id="div">

       <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >

         <tr>

           <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>Preguntas</strong></span></td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">No, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">Si / No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">S&iacute;, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> S&iacute;</td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Su  jefe o superiores le tratan bien, con amabilidad? </strong></td>

		   

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"> 

             <label>

               <input name="P30" type="radio" value="1" onclick="actualiza6(this,30)" />

             </label>                  </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

             <input name="P30" type="radio" value="2" onclick="actualiza6(this,30)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P30" type="radio" value="3" onclick="actualiza6(this,30)" />

             </label>                 </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P30" type="radio" value="4"  onclick="actualiza6(this,30)"/>

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P30" type="radio" value="5" onclick="actualiza6(this,30)" />

             </label>                     </td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Considera  adecuado el nivel de exigencia por parte de tu jefe? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P31" type="radio" value="1" onclick="actualiza6(this,31)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P31" type="radio" value="2" onclick="actualiza6(this,31)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P31" type="radio" value="3" onclick="actualiza6(this,31)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P31" type="radio" value="4" onclick="actualiza6(this,31)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P31" type="radio" value="5" onclick="actualiza6(this,31)" /></td>

         </tr>

         <tr>

           <td class="style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><table border="0" cellspacing="0" cellpadding="0">

             <tr>

               <td class="Estilo9"><p>&iquest;Considera  que su jefe es participativo? </p></td>

             </tr>

           </table></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P32" type="radio" value="1" onclick="actualiza6(this,32)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P32" type="radio" value="2" onclick="actualiza6(this,32)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P32" type="radio" value="3" onclick="actualiza6(this,32)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P32" type="radio" value="4" onclick="actualiza6(this,32)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P32" type="radio" value="5" onclick="actualiza6(this,32)"  /></td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Considera  usted que trabaja en equipo con su jefe y compa&ntilde;eros? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P33" type="radio" value="1" onclick="actualiza6(this,33)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P33" type="radio" value="2" onclick="actualiza6(this,33)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P33" type="radio" value="3" onclick="actualiza6(this,33)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P33" type="radio" value="4" onclick="actualiza6(this,33)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P33" type="radio" value="5" onclick="actualiza6(this,33)" /></td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><p align="left"><strong>&iquest;Tiene  usted comunicaci&oacute;n con su jefe? </strong></p></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P34" type="radio" value="1" onclick="actualiza6(this,34)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P34" type="radio" value="2" onclick="actualiza6(this,34)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P34" type="radio" value="3" onclick="actualiza6(this,34)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P34" type="radio" value="4" onclick="actualiza6(this,34)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P34" type="radio" value="5" onclick="actualiza6(this,34)" /></td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Considera  que tiene Usted un jefe justo?</strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P35" type="radio" value="1" onclick="actualiza6(this,35)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P35" type="radio" value="2" onclick="actualiza6(this,35)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P35" type="radio" value="3" onclick="actualiza6(this,35)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P35" type="radio" value="4" onclick="actualiza6(this,35)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P35" type="radio" value="5" onclick="actualiza6(this,35)" /></td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Sabe  como miden su desempe&ntilde;o? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P36" type="radio" value="1" onclick="actualiza6(this,36)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P36" type="radio" value="2"  onclick="actualiza6(this,36)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P36" type="radio" value="3"  onclick="actualiza6(this,36)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P36" type="radio" value="4"  onclick="actualiza6(this,36)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P36" type="radio" value="5"  onclick="actualiza6(this,36)" /></td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Tiene  usted sus objetivos claros? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P37" type="radio" value="1"  onclick="actualiza6(this,37)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P37" type="radio" value="2" onclick="actualiza6(this,37)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P37" type="radio" value="3" onclick="actualiza6(this,37)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P37" type="radio" value="4" onclick="actualiza6(this,37)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P37" type="radio" value="5" onclick="actualiza6(this,37)" /></td>

         </tr>
       </table>

  </div>
<td><p align="right" style="margin-right:10px;"><a href="javascript:valida_envia6();" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p></td>

</div>

<?php
	}	
}

?>
<!--###################################################################################-->

<?php
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:

	$ac=$_POST["action"];//La accion se guarda en la variable $ac.

	if ($ac=="cuestionario7"){	

?>

<style type="text/css">

<!--

.Estilo1 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

	color: #0000FF;

	font-size: 24px;

}

.Estilo2 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 18px;

}

.Estilo3 {

	font-size: 24px;

	font-weight: bold;

}

.Estilo4 {

	font-size: 10px;

	font-weight: bold;

}

.Estilo5 {font-size: 18px}

-->

</style>

<script language="javascript">
preguntas7=new Array(0,0,0,0,0,0);
function actualiza7(oRad,n){
	var valor_actual7=oRad.value;
	//alert("N ["+n+"] \nValor actual4 ["+valor_actual4+"]");
	preguntas7[n-38]=valor_actual7;
}
function valida_envia7(){
	//alert('ok3');
	
	for(var i=0;i<preguntas7.length;i++){
		//alert(preguntas4[i]);
		if (preguntas7[i]==0){
			alert("Error: la pregunta ("+parseInt(i+38)+") no ha sido respondida. ");
			return;
		}
	}
	if(confirm("Desea continuar?")){
		ajax('div_resultados','action=cuestionario8&P38='+preguntas7[0]+'&P39='+preguntas7[1]+'&P40='+preguntas7[2]+'&P41='+preguntas7[3]+'&P42='+preguntas7[4]+'&P43='+preguntas7[5]);
	}
	
}	
</script>

<div align="center" id="presentacion">

	<div id="cabecera" style="border: 1px solid #000000;">

   <form id="fvalida" name="form" method="post" action="">

   <table width="100%" height="108" border="1">

   <tr>

   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>

   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>

   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>

   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:

     </p>

     <p class="Estilo5">23/11/09 </p></td>

   </tr>

   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>

   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>

     <p class="Estilo5">10 DE 14 </p></td>

   

   </table>

   </form>

   </div>

<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >

	 <p align="left" class="Estilo1"><strong><span class="Estilo1">Su puesto de trabajo</span> </strong></p>

	 <p align="justify" class="Estilo7 Estilo8">7.  Sobre su puesto de trabajo: </p>

	 <p style="margin:8px; text-align:justify;">&nbsp;</p>

	 <div align="center" id="div">

       <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >

         <tr>

           <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>Preguntas</strong></span></td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">No, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">Si / No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">S&iacute;, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> S&iacute;</td>

         </tr>
         <tr>

           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;El  puesto que ocupa en la empresa est&aacute; en relaci&oacute;n con la experiencia que usted  posee? </strong></td>

		   

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"> 

             <label>

               <input name="P38" type="radio" value="1"  onclick="actualiza7(this,38)"/>

             </label>                  </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>


             <input name="P38" type="radio" value="2" onclick="actualiza7(this,38)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P38" type="radio" value="3" onclick="actualiza7(this,38)" />

             </label>                 </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P38" type="radio" value="4" onclick="actualiza7(this,38)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P38" type="radio" value="5" onclick="actualiza7(this,38)" />

             </label>                     </td>

         </tr>

         <tr>

           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Su  puesto est&aacute; en relaci&oacute;n con su titulaci&oacute;n acad&eacute;mica?</strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P39" type="radio" value="1" onclick="actualiza7(this,39)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P39" type="radio" value="2" onclick="actualiza7(this,39)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P39" type="radio" value="3" onclick="actualiza7(this,39)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P39" type="radio" value="4" onclick="actualiza7(this,39)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P39" type="radio" value="5" onclick="actualiza7(this,39)" /></td>

         </tr>

         <tr>

           <td class="style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><table border="0" cellspacing="0" cellpadding="0">

             <tr>

               <td class="Estilo9"><p>&iquest;Se  considera usted valorado por el puesto de trabajo que ocupa?</p></td>

             </tr>

           </table></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P40" type="radio" value="1" onclick="actualiza7(this,40)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P40" type="radio" value="2" onclick="actualiza7(this,40)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P40" type="radio" value="3" onclick="actualiza7(this,40)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P40" type="radio" value="4" onclick="actualiza7(this,40)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P40" type="radio" value="5" onclick="actualiza7(this,40)" /></td>

         </tr>

         <tr>

           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Considera  que su trabajo est&aacute; suficientemente reconocido y considerado por su jefe o  superiores? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P41" type="radio" value="1" onclick="actualiza7(this,41)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P41" type="radio" value="2" onclick="actualiza7(this,41)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P41" type="radio" value="3" onclick="actualiza7(this,41)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P41" type="radio" value="4" onclick="actualiza7(this,41)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P41" type="radio" value="5" onclick="actualiza7(this,41)"  /></td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><p align="left"><strong>&iquest;Le  gustar&iacute;a permanecer en su puesto de trabajo dentro de su empresa? </strong></p></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P42" type="radio" value="1" onclick="actualiza7(this,42)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P42" type="radio" value="2" onclick="actualiza7(this,42)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P42" type="radio" value="3" onclick="actualiza7(this,42)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P42" type="radio" value="4" onclick="actualiza7(this,42)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P42" type="radio" value="5" onclick="actualiza7(this,42)" /></td>

         </tr>

         <tr>

           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Existen  posibilidades reales de movilidad en su empresa? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P43" type="radio" value="1" onclick="actualiza7(this,43)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P43" type="radio" value="2" onclick="actualiza7(this,43)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P43" type="radio" value="3" onclick="actualiza7(this,43)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P43" type="radio" value="4" onclick="actualiza7(this,43)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P43" type="radio" value="5" onclick="actualiza7(this,43)" /></td>

         </tr>
       </table>

  </div>
    <td><p align="right" style="margin-right:10px;"><a href="javascript:valida_envia7();" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p></td>

</div>

<?php
	}
}

?>
<!--###################################################################################-->

<?php
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:

	$ac=$_POST["action"];//La accion se guarda en la variable $ac.

	if ($ac=="cuestionario8"){	

?>

<style type="text/css">

<!--

.Estilo1 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

	color: #0000FF;

	font-size: 24px;

}

.Estilo2 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 18px;

}

.Estilo3 {

	font-size: 24px;

	font-weight: bold;

}

.Estilo4 {

	font-size: 10px;

	font-weight: bold;

}

.Estilo5 {font-size: 18px}

-->

</style>

<script language="javascript">
preguntas8=new Array(0,0,0,0);
function actualiza8(oRad,n){
	var valor_actual8=oRad.value;
	//alert("N ["+n+"] \nValor actual4 ["+valor_actual4+"]");
	preguntas8[n-44]=valor_actual8;
}
function valida_envia8(){
	//alert('ok3');
	
	for(var i=0;i<preguntas8.length;i++){
		//alert(preguntas4[i]);
		if (preguntas8[i]==0){
			alert("Error: la pregunta ("+parseInt(i+44)+") no ha sido respondida. ");
			return;
		}
	}
	if(confirm("Desea continuar?")){
		ajax('div_resultados','action=cuestionario9&P44='+preguntas8[0]+'&P45='+preguntas8[1]+'&P46='+preguntas8[2]+'&P47='+preguntas8[3]);
	}
	
}	
</script>

<div align="center" id="presentacion">

	<div id="cabecera" style="border: 1px solid #000000;">

   <form id="fvalida" name="form" method="post" action="">

   <table width="100%" height="108" border="1">

   <tr>

   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>

   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>

   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>

   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:

     </p>

     <p class="Estilo5">23/11/09 </p></td>

   </tr>

   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>

   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>

     <p class="Estilo5">11 DE 14 </p></td>

   

   </table>

   </form>

   </div>

<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >

	 <p align="left" class="Estilo1"><strong>Remuneraci&oacute;n </strong></p>

	 <p align="justify" class="Estilo7 Estilo8">8.  Sobre su sueldo: </p>

	 <p style="margin:8px; text-align:justify;">&nbsp;</p>

	 <div align="center" id="div">

       <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >

         <tr>

           <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>Preguntas</strong></span></td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">No, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">Si / No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">S&iacute;, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> S&iacute;</td>

         </tr>
         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Considera  que su trabajo est&aacute; bien remunerado? </strong></td>

		   

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"> 

             <label>

               <input name="P44" type="radio" value="1" onclick="actualiza8(this,44)" />

             </label>                  </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

             <input name="P44" type="radio" value="2" onclick="actualiza8(this,44)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P44" type="radio" value="3" onclick="actualiza8(this,44)" />

             </label>                 </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P44" type="radio" value="4" onclick="actualiza8(this,44)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P44" type="radio" value="5" onclick="actualiza8(this,44)" />

             </label>                     </td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Cree  que su sueldo est&aacute; en consonancia con los sueldos que hay en su empresa? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P45" type="radio" value="1" onclick="actualiza8(this,45)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P45" type="radio" value="2" onclick="actualiza8(this,45)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P45" type="radio" value="3" onclick="actualiza8(this,45)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P45" type="radio" value="4" onclick="actualiza8(this,45)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P45" type="radio" value="5" onclick="actualiza8(this,45)" /></td>

         </tr>

         <tr>

           <td class="style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><table border="0" cellspacing="0" cellpadding="0">

             <tr>

               <td class="Estilo9"><p>&iquest;Considera  que su remuneraci&oacute;n est&aacute; por encima de la media en su entorno social, fuera de  la empresa? </p></td>

             </tr>

           </table></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P46" type="radio" value="1" onclick="actualiza8(this,46)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P46" type="radio" value="2" onclick="actualiza8(this,46)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P46" type="radio" value="3" onclick="actualiza8(this,46)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P46" type="radio" value="4" onclick="actualiza8(this,46)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P46" type="radio" value="5" onclick="actualiza8(this,46)" /></td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>&iquest;Cree  que su sueldo y el de sus compa&ntilde;eros est&aacute; en consonancia con la situaci&oacute;n y  marcha econ&oacute;mica de la empresa? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P47" type="radio" value="1" onclick="actualiza8(this,47)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P47" type="radio" value="2" onclick="actualiza8(this,47)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P47" type="radio" value="3" onclick="actualiza8(this,47)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P47" type="radio" value="4" onclick="actualiza8(this,47)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P47" type="radio" value="5" onclick="actualiza8(this,47)" /></td>

         </tr>
       </table>

  </div>
<td><p align="right" style="margin-right:10px;"><a href="javascript:valida_envia8();" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p></td>

</div>

<?php
	}
}

?>
<!--###################################################################################-->

<?php
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:

	$ac=$_POST["action"];//La accion se guarda en la variable $ac.

	if ($ac=="cuestionario9"){	

?>

<style type="text/css">

<!--

.Estilo1 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

	color: #0000FF;

	font-size: 24px;

}

.Estilo2 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 18px;

}

.Estilo3 {

	font-size: 24px;

	font-weight: bold;

}

.Estilo4 {

	font-size: 10px;

	font-weight: bold;

}

.Estilo5 {font-size: 18px}

-->

</style>

<script language="javascript">
preguntas9=new Array(0,0,0,0);
function actualiza9(oRad,n){
	var valor_actual9=oRad.value;
	//alert("N ["+n+"] \nValor actual4 ["+valor_actual4+"]");
	preguntas9[n-48]=valor_actual9;
}
function valida_envia9(){
	//alert('ok3');
	
	for(var i=0;i<preguntas9.length;i++){
		//alert(preguntas4[i]);
		if (preguntas9[i]==0){
			alert("Error: la pregunta ("+parseInt(i+48)+") no ha sido respondida. ");
			return;
		}
	}
	if(confirm("Desea continuar?")){
		ajax('div_resultados','action=cuestionario10&P48='+preguntas9[0]+'&P49='+preguntas9[1]+'&P50='+preguntas9[2]+'&P51='+preguntas9[3]);
	}
	
}	
</script>

<div align="center" id="presentacion">

	<div id="cabecera" style="border: 1px solid #000000;">

   <form id="fvalida" name="form" method="post" action="">

   <table width="100%" height="108" border="1">

   <tr>

   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>

   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>

   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>

   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:

     </p>

     <p class="Estilo5">23/11/09 </p></td>

   </tr>

   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>

   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>

     <p class="Estilo5">12 DE 14 </p></td>

   

   </table>

   </form>

   </div>

<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >

	 <p align="left" class="Estilo1"><strong>Reconocimiento </strong></p>

	 <p align="justify" class="Estilo7 Estilo8">9.  &iquest;Considera usted que en su empresa... </p>

	 <p style="margin:8px; text-align:justify;">&nbsp;</p>

	 <div align="center" id="div">

       <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >

         <tr>

           <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>Preguntas</strong></span></td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">No, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">Si / No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">S&iacute;, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> S&iacute;</td>

         </tr>
         <tr>

           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>...  existe igualdad entre hombres y mujeres, a la hora de ocupar puestos de  trabajo? </strong></td>

		   

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"> 

             <label>

               <input name="P48" type="radio" value="1" onclick="actualiza9(this,48)" />

             </label>                  </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

             <input name="P48" type="radio" value="2" onclick="actualiza9(this,48)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P48" type="radio" value="3" onclick="actualiza9(this,48)" />

             </label>                 </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P48" type="radio" value="4" onclick="actualiza9(this,48)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P48" type="radio" value="5" onclick="actualiza9(this,48)" />

             </label>                     </td>

         </tr>

         <tr>

           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>..  realiza un trabajo &uacute;til? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P49" type="radio" value="1" onclick="actualiza9(this,49)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P49" type="radio" value="2" onclick="actualiza9(this,49)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P49" type="radio" value="3" onclick="actualiza9(this,49)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P49" type="radio" value="4" onclick="actualiza9(this,49)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P49" type="radio" value="5" onclick="actualiza9(this,49)" /></td>

         </tr>

         <tr>

           <td class="style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><table border="0" cellspacing="0" cellpadding="0">

             <tr>

               <td class="Estilo9"><p>...  tiene un cierto nivel de seguridad en su puesto de trabajo, de cara al futuro? </p></td>

             </tr>

           </table></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P50" type="radio" value="1" onclick="actualiza9(this,50)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P50" type="radio" value="2" onclick="actualiza9(this,50)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P50" type="radio" value="3" onclick="actualiza9(this,50)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P50" type="radio" value="4" onclick="actualiza9(this,50)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P50" type="radio" value="5" onclick="actualiza9(this,50)" /></td>

         </tr>

         <tr>

           <td class="Estilo7 Estilo8 style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>...  es posible la promoci&oacute;n laboral por un buen rendimiento laboral? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P51" type="radio" value="1" onclick="actualiza9(this,51)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P51" type="radio" value="2" onclick="actualiza9(this,51)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P51" type="radio" value="3" onclick="actualiza9(this,51)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P51" type="radio" value="4" onclick="actualiza9(this,51)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P51" type="radio" value="5" onclick="actualiza9(this,51)" /></td>

         </tr>
       </table>

  </div>
      <td><p align="right" style="margin-right:10px;"><a href="javascript:valida_envia9();" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p></td>

</div>

<?php
	}
}

?>
<!--###################################################################################-->

<?php
//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:

	$ac=$_POST["action"];//La accion se guarda en la variable $ac.

	if ($ac=="cuestionario10"){	

?>

<style type="text/css">

<!--

.Estilo1 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

	color: #0000FF;

	font-size: 24px;

}

.Estilo2 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 18px;

}

.Estilo3 {

	font-size: 24px;

	font-weight: bold;

}

.Estilo4 {

	font-size: 10px;

	font-weight: bold;

}

.Estilo5 {font-size: 18px}

-->

</style>

<script language="javascript">
preguntas10=new Array(0,0,0);
function actualiza10(oRad,n){
	var valor_actual10=oRad.value;
	//alert("N ["+n+"] \nValor actual4 ["+valor_actual4+"]");
	preguntas10[n-52]=valor_actual10;
}
function valida_envia10(){
	//alert('ok3');
	var depto=$("#departamento").attr("value");
	if (depto==""||depto==undefined||depto==null){
		alert("Advertencia: Elija el Departamento. ");
		return;
	}
	
	for(var i=0;i<preguntas10.length;i++){
		//alert(preguntas4[i]);
		if (preguntas10[i]==0){
			alert("Error: la pregunta ("+parseInt(i+52)+") no ha sido respondida. ");
			return;
		}
	}
	if(confirm("Desea continuar?")){
		ajax('div_resultados','action=gracias&P52='+preguntas10[0]+'&P53='+preguntas10[1]+'&P54='+preguntas10[2]+'&departamento='+depto);
	}
	
}	
</script>

<div align="center" id="presentacion">

	<div id="cabecera" style="border: 1px solid #000000;">

   <form id="fvalida" name="form" method="post" action="">

   <table width="100%" height="108" border="1">

   <tr>

   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>

   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>

   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>

   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:

     </p>

     <p class="Estilo5">23/11/09 </p></td>

   </tr>

   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>

   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>

     <p class="Estilo5">13 DE 14 </p></td>

   

   </table>

   </form>

   </div>

<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >

	 <p align="left" class="Estilo1"><strong>Comunicaci&oacute;n </strong></p>

	 <p align="justify" class="Estilo7 Estilo8">10.  &iquest;Considera usted que en su empresa... </p>

	 <p style="margin:8px; text-align:justify;">&nbsp;</p>

	 <div align="center" id="div">

       <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >

         <tr>

           <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>Preguntas</strong></span></td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">No, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">Si / No</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">S&iacute;, pero</td>

           <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;"> S&iacute;</td>

         </tr>
         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>...  existe buena comunicaci&oacute;n de arriba a abajo entre jefes y subordinados? </strong></td>

		   

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"> 

             <label>

               <input name="P52" type="radio" value="1" onclick="actualiza10(this,52)" />

             </label>                  </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

             <input name="P52" type="radio" value="2" onclick="actualiza10(this,52)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P52" type="radio" value="3"  onclick="actualiza10(this,52)"/>

             </label>                 </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P52" type="radio" value="4" onclick="actualiza10(this,52)" />

             </label>                     </td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;">

             <label>

               <input name="P52" type="radio" value="5" onclick="actualiza10(this,52)" />

             </label>                     </td>

         </tr>

         <tr>

           <td class="style2 Estilo8 Estilo7" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong>...  existe buena comunicaci&oacute;n de abajo a arriba entre subordinados y jefes? </strong></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P53" type="radio" value="1" onclick="actualiza10(this,53)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P53" type="radio" value="2" onclick="actualiza10(this,53)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P53" type="radio" value="3" onclick="actualiza10(this,53)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P53" type="radio" value="4" onclick="actualiza10(this,53)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P53" type="radio" value="5" onclick="actualiza10(this,53)" /></td>

         </tr>

         <tr>

           <td class="style2" style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><table border="0" cellspacing="0" cellpadding="0">

             <tr>

               <td class="Estilo9"><p>...  su jefe o jefes escuchan las opiniones y sugerencias de los empleados?</p></td>

             </tr>

           </table></td>

           <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="P54" type="radio" value="1" onclick="actualiza10(this,54)" /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P54" type="radio" value="2" onclick="actualiza10(this,54)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P54" type="radio" value="3" onclick="actualiza10(this,54)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P54" type="radio" value="4" onclick="actualiza10(this,54)"  /></td>

           <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="P54" type="radio" value="5" onclick="actualiza10(this,54)"  /></td>

         </tr>
       </table>DEPARTAMENTOS:
<select name="departamento" id="departamento">
	 <option value="" selected="selected">Selecciona</option>
     <option value="NEXTEL/OMEGA" >NEXTEL/OMEGA</option>
     <option value="ALMACEN" >ALMACEN</option>
     <option value="ASEGURAMIENTO DE CALIDAD" >ASEGURAMIENTO DE CALIDAD</option>
     <option value="COSMETICA" >COSMETICA</option>
     <option value="COMPRAS" >COMPRAS</option>
     <option value="RECURSOS HUMANOS" >RECURSOS HUMANOS</option>
     <option value="DIRECCION GENERAL" >DIRECCION GENERAL</option>
     <option value="SISTEMAS" >SISTEMAS</option>
     <option value="CORPORATIVO/ADMON GRAL." >CORPORATIVO/ADMON GRAL.</option>
     <option value="AREA DE COMPUTO" >AREA DE COMPUTO</option>
     <option value="NUEVO LAREDO" >NUEVO LAREDO</option>
     </select>
  </div>
<td><p align="right" style="margin-right:10px;"><a href="javascript:valida_envia10();" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p></td>



<?php
	}
}

?>
<!--#####################################################################################################33-->
<?php

//include 'conexion.php';

//print_r($_POST);//imprime los valores que recibes por el metodo post esto se bebe de ocultar al finalizar el programa.

if ($_POST["action"]){//si recibe por el metodo POST una accion realiza lo siguiente:

	$ac=$_POST["action"];//La accion se guarda en la variable $ac.
	if ($_POST["action"]=="gracias"){
?>
<style type="text/css">

<!--

.Estilo1 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

	color: #0000FF;

	font-size: 24px;

}

.Estilo2 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 18px;

}

.Estilo3 {

	font-size: 24px;

	font-weight: bold;

}

.Estilo4 {

	font-size: 10px;

	font-weight: bold;

}

.Estilo5 {font-size: 18px}

.Estilo6 {

	font-size: 16px;

	font-weight: bold;

}

.Estilo7 {font-family: Verdana, Arial, Helvetica, sans-serif}

.Estilo8 {font-size: 16px}

.Estilo9 {

	font-size: 16px;

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

}

-->

</style>

<form>
<div align="center">
	<div id="cabecera" style="border: 1px solid #000000;">
   <table width="100%" height="108" border="1">
   <tr>
   <td width="191" rowspan="2"><img src="img/logo_iq.jpg" />  </td>
   <td align="center" width="303"><span class="Estilo4">REVISI&Oacute;N</span>:  <span class="Estilo5">01   </span></td>
   <td align="center" width="289"><span class="Estilo4">CLAVE:</span>  <span class="Estilo5">IQFO640101 </span></td>
   <td align="center" width="195"><p class="Estilo4">EMISI&Oacute;N:
     </p>
     <p class="Estilo5">23/11/09 </p></td>
   </tr>
   <td align="center" colspan="2"><span class="Estilo3">ENCUESTA CLIMA LABORAL</span></td>
   <td align="center"><p class="Estilo4">P&Aacute;GINA: </p>
     <p class="Estilo5">14 DE 14 </p></td>
   </table>
   </div>
<div id="Mensaje" style="size:90%; border:2 px solid #000000;" >
	 <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p align="center" class="Estilo1">Gracias</p>
	 <p align="justify" class="Estilo2">Te agradecemos el tiempo que nos prestaste para contestar esta encuesta y contrubuir en el desarrollo de la empresa. </p>
     <p align="justify" class="Estilo2">&nbsp;</p>
	   <p align="justify" class="Estilo2"></p>
    </div>
	</div>
	<p align="center"><a href="mod_editar.php" style="font-size:20px; color:#06F; text-decoration:none;"><< Fin >></a></p>
	</form>

<?php
	}
}

?>