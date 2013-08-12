<?php
    $idEv=$_GET["idEv"];
    $temporal=$idEv;    
    $idEv=substr($idEv,32);
    if(! $temporal==md5($idEv).$temporal){
        echo "Error Acceso Incorrecto";
    }
    //consulta de la prueba
    $sql="SELECT * FROM competencias WHERE id_temaevaluacion=3";
    $res=mysql_query($sql,conexionBd());
    if(mysql_num_rows($res)==0){
        echo "No hay competencias en la Base de Datos."; exit;
    }
    $sqlE="SELECT * FROM encuestas2 WHERE id_per='".$idEv."'";
    $resE=mysql_query($sqlE,conexionBd());
    if(mysql_num_rows($resE)==0){
        echo "Error al procesar la respuesta"; exit;
    }
    $rowE=mysql_fetch_array($resE);
    
    function conexionBd(){
        require("config.inc");
	$link=mysql_connect($host,$usuarioBd,$passBd);
	if($link==false){
            echo "Error en la conexion a la base de datos";
        }else{
	    mysql_select_db($dbBd);
	    return $link;
	}
    }
?>
<html>
    <head>
	<link rel="stylesheet" type="text/css" media="print" href="estilos.css">	
    </head>
<body>

<div class="nover">
<table border="0" cellpadding="1" cellspacing="1" width="1000" style="font-size: 12px;font-family: Verdana,Sans;">
    <tr>
        <td width="400" colspan="2" style="text-align: left;font-weight: bold;font-size: 14px;">I. DATOS DEL EVALUADO</td>        
        <td width="100" style="text-align: right;font-weight: bold;font-size: 14px;">Fecha</td>
        <td><?=$rowE["P1"];?></td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>        
    </tr>
    <tr>
        <td width="180" style="text-align: left;">Nombre:</td>
        <td width="300" colspan="3">&nbsp;<?=$rowE["P2"];?></td>        
    </tr>
    <tr>
        <td style="text-align: left;">Puesto:</td>
        <td colspan="3">&nbsp;<?=$rowE["P3"];?></td>        
    </tr>
    <tr>
        <td style="text-align: left;">Gerencia:</td>
        <td colspan="3">&nbsp;<?=$rowE["P4"];?></td>        
    </tr>
    <tr>
        <td style="text-align: left;">Ubicaci&oacute;n f&iacute;sica:</td>
        <td colspan="3">&nbsp;<?=$rowE["P5"];?></td>        
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>        
    </tr>
    <tr>
        <td colspan="4" style="text-align: left;font-weight: bold;font-size: 14px;">II. OBJETIVOS Y RESULTADOS</td>                
    </tr>
    <tr>
        <td colspan="4" style="text-align: right;font-size: 10px;">5) = Excelente, 4)=Muy Bueno, 3)=Bueno, 2)=Regular, 1)=Deficiente</td>        
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>        
    </tr>
</table>
<table border="0" cellpadding="1" cellspacing="1" width="1000" style="font-size: 12px;font-family: Verdana,Sans;">
    <tr>
        <td style="text-align: center;font-weight: bold;border: 1px solid #000;" width="350">VARIABLE POR EVALUAR</td>
        <td style="text-align: center;height: 15px;padding: 5px;border: 1px solid #000;" width="300">
            <div style="height: 35px;width: 98%;overflow: hidden;border: 0px solid #FF0000;">
                <div style="background: #FFF;color: #000;float: left;border: 0px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;">1</div>
                <div style="background: #FFF;color: #000;float: left;border: 0px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;">2</div>
                <div style="background: #FFF;color: #000;float: left;border: 0px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;">3</div>
                <div style="background: #FFF;color: #000;float: left;border: 0px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;">4</div>
                <div style="background: #FFF;color: #000;float: left;border: 0px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;">5</div>
            </div>
        </td>        
    </tr>
<?
    $i=1; $iP=29; $con1=0; $con2=0; $con3=0; $con4=0; $con5=0;
    $background="#CCC";
    $divBlanco="<div style='background: #FFF;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;'>";
    while($row=mysql_fetch_array($res)){
        //para procesar el seleccionado de las respuestas
        $pregunta="P".$iP;
?>
    <tr>
        <td style="border: 1px solid #000;text-align: left;font-weight: bold;height: 15px;padding: 5px;" width="450">&nbsp;<? echo $i.". ".$row["nombreCompetencia"];?></td>
        <td style="border: 1px solid #000;text-align: center;height: 15px;padding: 5px;" width="300">
            <div style="height: 35px;width: 98%;overflow: hidden;border: 0px solid #FF0000;">
<?
        if($rowE[$pregunta]==1){
            $con1+=1;
?>
                <div style="background: <?=$background;?>;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;">1</div>
<?
        }else{
            echo $divBlanco."1</div>";
        }
        if($rowE[$pregunta]==2){
            $con2+=1;
?>
                <div style="background: <?=$background;?>;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;">2</div>
<?            
        }else{
            echo $divBlanco."2</div>";
        }
        if($rowE[$pregunta]==3){
            $con3+=1;
?>
                <div style="background: <?=$background;?>;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;">3</div>
<?            
        }else{
            echo $divBlanco."3</div>";
        }
        if($rowE[$pregunta]==4){
            $con4+=1;
?>
                <div style="background: <?=$background;?>;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;">4</div>
<?            
        }else{
            echo $divBlanco."4</div>";
        }
        if($rowE[$pregunta]==5){
            $con5+=1;
?>
                <div style="background: <?=$background;?>;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;">5</div>
<?            
        }else{
            echo $divBlanco."5</div>";
        }
?>
            </div>
        </td>
    </tr>
<?
        $i+=1; $iP+=1;
    }
?>
    <tr>
        <td colspan="4" style="font-size: 10px;font-weight: bold;">(En todos aquellos casis en que el evaluado obtenga una calificacion de 2 o menos, en cada punto a evaluar, el evaluador deber&aacute; anotar al calce, acciones de mejora.)</td>        
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>        
    </tr>
    <tr>
        <td colspan="4" style="font-size: 14px;font-weight: bold;">OBSERVACIONES</td>        
    </tr>
    <tr>
        <td colspan="4"><div style="height: 150px;border: 1px solid #CCC;width: 90%;"><?=$rowE["P33"];?></div></td>        
    </tr>
    <tr>
        <td colspan="4" style="font-weight: bold;font-size: 14px;text-decoration: underline;">PONDERACI&Oacute;N FINAL</td>        
    </tr>
    <tr>
        <td style="font-size: 14px;">RESULTADO DE EVALUACION DE COMPETENCIAS</td>
        <td colspan="3"><div style="height: 35px;width: 98%;overflow: hidden;border: 1px solid #000;"></div></td>        
    </tr>
    <tr>
        <td style="font-size: 14px;">RESULTADO DE EVALUACION DE RESULTADOS</td>
        <td colspan="3"><div style="height: 35px;width: 98%;overflow: hidden;border: 1px solid #000;"></div></td>        
    </tr>
    <tr>
        <td style="font-weight: bold;font-size: 14px;">PROMEDIO GENERAL</td>
        <td colspan="3"><div style="height: 35px;width: 98%;overflow: hidden;border: 1px solid #000;"></div></td>        
    </tr>    
    <tr>
        <td colspan="4">&nbsp;</td>        
    </tr>
    <tr>
        <td colspan="4" style="font-weight: bold;">Jefe inmediato:</td>        
    </tr>
    <tr>        
        <td colspan="4">&nbsp;Nombre: <?=$rowE["P34"];?></td>        
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>        
    </tr>
</table>
</div>
</body>
</html>