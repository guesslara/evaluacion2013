<?php
$bd_host = "localhost";
$bd_usuario = "root";
$bd_password = "m4tr1x";
$bd_base = "encuesta2012";
//$bd_almacen="db_iqe_inv";
$con = mysql_connect($bd_host, $bd_usuario, $bd_password);
@mysql_select_db($bd_base, $con) or die("No se selecciono la Base de Datos");
?>