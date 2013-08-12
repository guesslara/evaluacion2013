<?php
    $idEv=$_GET["idEv"];
    $temporal=$idEv;    
    $idEv=substr($idEv,32);
    if(! $temporal==md5($idEv).$temporal){
        echo "Error Acceso Incorrecto";
    }
    //consulta de la prueba
    $sql="SELECT * FROM competencias WHERE id_temaevaluacion=1";
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
        <td colspan="4" style="text-align: left;font-weight: bold;font-size: 14px;">II. DATOS DEL EVALUADOR</td>                
    </tr>
    <tr>
        <td style="text-align: left;">Relaci&oacute;n con el evaluado:</td>
        <td colspan="3">&nbsp;
<?
        if($rowE["P6"]=="autoevaluacion"){
            echo "Autoevaluaci&oacute;n";
        }else if($rowE["P6"]=="jefeInmediato"){
            echo "Jefe Inmediato";
        }else if($rowE["P6"]=="colaborador"){
            echo "Colaborador";
        }else if($rowE["P6"]=="colega"){
            echo "Colega";
        }
?>      </td>        
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>        
    </tr>
    <tr>
        <td colspan="4" style="text-align: left;font-weight: bold;font-size: 14px;">III. EVALUACI&Oacute;N DE COMPETENCIAS GEN&Eacute;RICAS</td>                
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
        <td style="text-align: center;font-weight: bold;" width="350">CONCEPTO</td>
        <td style="text-align: center;font-weight: bold;" width="300">CALIFICACI&Oacute;N</td>
        <td style="text-align: center;font-weight: bold;" width="350">COMENTARIOS</td>
    </tr>
<?
    $i=1; $iP=7; $con1=0; $con2=0; $con3=0; $con4=0; $con5=0;
    $background="#CCC";
    $divBlanco="<div style='background: #FFF;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;'>";
    while($row=mysql_fetch_array($res)){
        //para procesar el seleccionado de las respuestas
        $pregunta="P".$iP;
?>
    <tr>
        <td style="text-align: left;font-weight: bold;height: 15px;padding: 5px;" width="450">&nbsp;<? echo $i.". ".$row["nombreCompetencia"];?></td>
        <td style="text-align: center;height: 15px;padding: 5px;" width="300">
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
        <td style="text-align: center;height: 15px;padding: 5px;" width="250"><div style="height: 35px;width: 98%;overflow: hidden;border: 1px solid #000;"></div></td>
    </tr>
<?
        $i+=1; $iP+=1;
    }
?>
    <tr>
        <td style="text-align: left;font-weight: bold;height: 15px;padding: 5px;" width="350">Promedio competencias</td>
        <td style="text-align: center;height: 15px;padding: 5px;" width="300">
            <div style="height: 35px;width: 98%;overflow: hidden;border: 0px solid #FF0000;">
                <div style="background: #FFF;color: #000;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;"><?=$con1;?></div>
                <div style="background: #FFF;color: #000;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;"><?=$con2;?></div>
                <div style="background: #FFF;color: #000;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;"><?=$con3;?></div>
                <div style="background: #FFF;color: #000;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;"><?=$con4;?></div>
                <div style="background: #FFF;color: #000;float: left;border: 1px solid #000;text-align: center;width: 40px;font-weight: bold;height: 23px;padding: 5px;"><?=$con5;?></div>
            </div>
        </td>
        <td style="text-align: center;" width="350">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>        
    </tr>
    <tr>
        <td colspan="4" style="text-align: left;font-weight: bold;font-size: 14px;">IV. COMPLEMENTO DE LA EVALUACI&Oacute;N</td>                
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>        
    </tr>
    <tr>
        <td colspan="4">A.- Indique como la persona refleja los valores de IQE y su compromiso para asegurar que los mismos se apliquen. <span style="font-size: 8px;">(Liderazgo; Innovaci&oacute;n; Visi&oacute;n laboral a resultados; Vocaci&oacute;n de servicio; Calidad; Integridad; Trabajo en equipo; Responsabilidad)</span></td>        
    </tr>
    <tr>
        <td colspan="4"><div style="height: 150px;border: 1px solid #CCC;width: 90%;"><?=$rowE["P25"];?></div></td>        
    </tr>
    <tr>
        <td colspan="4">B.- S&iacute;rvase en este caso indicar alguna(s) fortaleza(s) y debilidad(es) particulares sobre la persona en refrencia.</td>        
    </tr>
    <tr>
        <td colspan="4"><div style="height: 150px;border: 1px solid #CCC;width: 90%;"><?=$rowE["P26"];?></div></td>        
    </tr>
    <tr>
        <td colspan="4">C.- &iquest;Qu&eacute; le sugerir&iacute;a a la persona en referencia para mejorar su desempe&ntilde;o personal?</td>        
    </tr>
    <tr>
        <td colspan="4"><div style="height: 150px;border: 1px solid #CCC;width: 90%;"><?=$rowE["P27"];?></div></td>        
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>        
    </tr>
    <tr>
        <td colspan="4">Evaluador:</td>        
    </tr>
    <tr>        
        <td colspan="4">&nbsp;Nombre: <?=$rowE["P28"];?></td>        
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>        
    </tr>
</table>