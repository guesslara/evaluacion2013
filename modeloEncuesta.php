<?php
 /*
  * Nuevo archivo para la generacion de la encuesta por medio de la base de datos
  * Todas las preguntas se extraen y se muestran por medio de funciones para la vista del usuario
  * Autor: Gerardo Lara
  * Version 1.0
  * Fecha 25 de Noviembre de 2012
  */
    session_start();
    //print_r($_SESSION);
    class modeloEncuesta{
        
        private function conexionBd(){
            require("config.inc");
	    $link=mysql_connect($host,$usuarioBd,$passBd);
	    if($link==false){
		echo "Error en la conexion a la base de datos";
            }else{
		mysql_select_db($dbBd);
		return $link;
	    }
        }
        
	public function guardaComplemento2($txtObservacionesCom,$txtEvaluadorCom){
	    //echo "Funcion para guardar el complemento 2"; exit;
	    array_push($_SESSION["respuestas_globales"],$txtObservacionesCom);
	    array_push($_SESSION["respuestas_globales"],$txtEvaluadorCom);
?>
	    <script type="text/javascript"> gracias(); </script>
<?
	    //echo "<p align='center' style='margin-right:10px;'><a href='javascript:gracias();' style='font-size:20px; color:#06F; text-decoration:none;'>Siguiente >></a></p>";
	}
	
	public function guardaComplemento1($complementoA,$complementoB,$complementoC,$evaluador){
	    array_push($_SESSION["respuestas_globales"],$complementoA);
	    array_push($_SESSION["respuestas_globales"],$complementoB);
	    array_push($_SESSION["respuestas_globales"],$complementoC);
	    array_push($_SESSION["respuestas_globales"],$evaluador);
?>
            <script type="text/javascript"> ajax("div_resultados","action=encuesta&idTema=3&nroPregunta=1") </script>
<?	    
	}
	
	public function guardarDatosIniciales($txtFecha,$txtNombre,$txtPuesto,$txtGerencia,$txtUbicacion,$relacion){
	    //se guardan los valores en el array
	    array_push($_SESSION["respuestas_globales"],$txtFecha);
	    array_push($_SESSION["respuestas_globales"],$txtNombre);
	    array_push($_SESSION["respuestas_globales"],$txtPuesto);
	    array_push($_SESSION["respuestas_globales"],$txtGerencia);
	    array_push($_SESSION["respuestas_globales"],$txtUbicacion);
	    array_push($_SESSION["respuestas_globales"],$relacion);
	    //se envian los datos hacia las preguntas
?>
            <script type="text/javascript"> ajax("div_resultados","action=encuesta&idTema=1&nroPregunta=1") </script>
<?	    
	}
	
        public function guardarEncuesta(){
            require("config.inc");
            $tdp=$numeroTotalEncuesta;
            $ndpr=count($_SESSION["respuestas_globales"]);
            $sql_valores="";
            $campos_valores="";
            foreach ($_SESSION["respuestas_globales"] as $idp){		
		if ($sql_valores==""){
			$sql_valores="'$idp'";
		}else{
			$sql_valores.=",'$idp'";		
		}
            }
            for($i=1;$i<=$tdp;$i++){
                if($campos_valores==""){
                    $campos_valores="P".$i;
                }else{
                    $campos_valores=$campos_valores.",P".$i;
                }
            }
	    $insert="insert into encuestas2 (".$campos_valores.") values ($sql_valores)";
	    //exit;
            $resE=mysql_query($insert,$this->conexionBd());
            if($resE){
                echo "<script type='text/javascript'> alert('Respuestas Guardadas'); presentacion(); </script>";
                unset($_SESSION["respuestas_globales"]);
            }else{
                echo "<script type='text/javascript'> alert('Error al Guardar las Respuestas.'); </script>";
		unset($_SESSION["respuestas_globales"]);
            }
        }
        
        public function guardarRespuestasTema($respuestasP,$idTema,$nroPregunta){
            $respuestasP=explode("|",$respuestasP);
            for($i=0;$i<count($respuestasP);$i++){
                array_push($_SESSION["respuestas_globales"],$respuestasP[$i]);
            }
?>
            <script type="text/javascript"> ajax("div_resultados","action=encuesta&idTema=<?=$idTema;?>&nroPregunta=<?=$nroPregunta;?>") </script>
<?
        }
        
        public function gracias($depto){
            array_push($_SESSION["respuestas_globales"],$depto);
	    echo "<style type='text/css'>
            <!--
            .Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;color: #0000FF;font-size: 34px;}
            .Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 18px;}
            .Estilo3 {font-size: 24px;font-weight: bold;}
            .Estilo4 {font-size: 10px;font-weight: bold;}
            .Estilo5 {font-size: 18px}
            .Estilo6 {font-size: 16px;font-weight: bold;}
            .Estilo7 {font-family: Verdana, Arial, Helvetica, sans-serif}
            .Estilo8 {font-size: 16px}
            .Estilo9 {font-size: 16px;font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;}
            -->
            </style>";
	    echo "
	    <div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p align='center' class='Estilo1'>Gracias</p>
                <p align='center' class='Estilo2'>Te agradecemos el tiempo que nos prestaste para contestar esta encuesta y contrubuir en el desarrollo de la empresa. </p>
                <p align='justify' class='Estilo2'>&nbsp;</p>
                <p align='justify' class='Estilo2'></p>
            </div>
            <p align='center'><a href='javascript:guardarEncuesta()' style='font-size:20px; color:#06F; text-decoration:none;'><< Fin >></a></p>";
        }
        
        public function mostrarPreguntasEncuesta($idTema,$nroPregunta){
            $this->mostrarCabecera();
            $this->estilosEncuesta();
            $temaActual=$this->devuelveTemaEncuesta($idTema);
            if($temaActual=="Sin Tema" && $idTema==2){
                //$this->mostrarSeleccionDepto($idTema,$nroPregunta);
		$this->preguntasAbiertas1($idTema,$nroPregunta);
            }else if($temaActual=="Sin Tema" && $idTema==4){
		$this->preguntasAbiertas2($idTema,$nroPregunta);
	    }else{
                $this->mostrarPreguntasTemaActual($idTema,$nroPregunta);
            }
        }
        
        private function mostrarSeleccionDepto($idTema,$nroPregunta){
            $sqlD="SELECT * FROM departamentos WHERE status=1";
            $resD=mysql_query($sqlD,$this->conexionBd());
            $select="<select name='cboDepto' id='cboDepto'>";
            $select.="<option value='Selecciona' selected='selected'>Selecciona...</option>";
            while($rowD=mysql_fetch_array($resD)){
                $select.="<option value='".$rowD["depto"]."'>".$rowD["depto"]."</option>";
            }
            $select.="</select>";
	    echo "
	    <div id='Mensaje' style='size:90%; border:2 px solid #000000;' >
                <p style='margin:8px; text-align:justify;'>&nbsp;</p>
                <div align='center' id='div'>
                    Selecciona tu Departamento:<br><br><br>";
            echo $select;
            echo "<p align='center' style='margin-right:10px;'><a href='javascript:gracias();' style='font-size:20px; color:#06F; text-decoration:none;'>Siguiente >></a></p>    
                </div>
            </div>";
        }
        
	private function preguntasAbiertas2($idTema,$nroPregunta){
?>
	    <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >
		<tr>
		    <td><p align="left" class="Estilo1">OBSERVACIONES</p></td>
		</tr>		
		<tr>
		    <td><textarea name="txtObservacionesCom" id="txtObservacionesCom" cols="70" rows="6"></textarea></td>
		</tr>
		<tr>
		    <td><hr style="background: #000;"></td>
		</tr>
		<tr>
		    <td style="font-weight: bold;font-size: 14px;">Jefe inmediato:</td>
		</tr>
		<tr>
		    <td style="font-weight: bold;font-size: 14px;">Nombre: <input type="text" name="txtEvaluadorComplemento2" id="txtEvaluadorComplemento2" style="width: 250px;font-size: 14px;font-weight: bold;"></td>
		</tr>
	    </table>
	    <p align="right" style="margin-right:10px;"><a href="javascript:guardarComplemento2();" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p>
<?
	}
	
	private function preguntasAbiertas1($idTema,$nroPregunta){
?>
	    <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >
		<tr>
		    <td><p align="left" class="Estilo1">COMPLEMENTO DE LA EVALUACI&Oacute;N</p></td>
		</tr>
		<tr>
		    <td style="font-weight: bold;font-size: 14px;">A.- Indique c&oacute;mo la persona refleja los valores de IQE y su compromiso para asegurar que los mismos se apliquen. (Liderazgo,Innovaci&oacute;n,Visi&oacute;n laboral a resultados; Vocaci&oacute;n de servicio; Calidad; Integridad, Trabajo en equipo, Responsabilidad)</td>
		</tr>
		<tr>
		    <td><textarea name="txtComplementoA" id="txtComplementoA" cols="70" rows="6"></textarea></td>
		</tr>
		<tr>
		    <td style="font-weight: bold;font-size: 14px;">B.- S&iacute;rvase en este caso indicar alguna(s) fortaleza(s) y debilidad(es) particulares sobre la persona en referencia.</td>
		</tr>
		<tr>
		    <td><textarea name="txtComplementoB" id="txtComplementoB" cols="70" rows="6"></textarea></td>
		</tr>
		<tr>
		    <td style="font-weight: bold;font-size: 14px;">C.- ¿Qu&eacute; le sugerir&iacute;a a la persona en referencia para mejorar su desempeño personal?</td>
		</tr>
		<tr>
		    <td><textarea name="txtComplementoC" id="txtComplementoC" cols="70" rows="6"></textarea></td>
		</tr>
		<tr>
		    <td><hr style="background: #000;"></td>
		</tr>
		<tr>
		    <td style="font-weight: bold;font-size: 14px;">Evaluador:</td>
		</tr>
		<tr>
		    <td style="font-weight: bold;font-size: 14px;">Nombre: <input type="text" name="txtEvaluadorComplemento" id="txtEvaluadorComplemento" style="width: 250px;font-size: 14px;font-weight: bold;"></td>
		</tr>
	    </table>
	    <p align="right" style="margin-right:10px;"><a href="javascript:guardarComplemento();" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p>
<?
	}
	
        private function mostrarPreguntasTemaActual($idTema,$nroPregunta){
	    //echo "Tema: ".$idTema."<br>";
	    //echo "Pregunta: ".$nroPregunta."<br>";
	    if($idTema==2){
		$this->preguntasAbiertas1($idTema,$nroPregunta);
	    }else if($idTema==4){
		$this->preguntasAbiertas2($idTema,$nroPregunta);
	    }else{
?>            
            <p align="left" class="Estilo1"><? echo utf8_encode($this->devuelveTemaEncuesta($idTema));?></p>
            <div id="Mensaje" style="size:90%; border:2 px solid #000000;" >
                <p style="margin:8px; text-align:justify;">&nbsp;</p>
                <div align="center" id="div">
<?
            $resP=$this->devuelvePreguntasTema($idTema);
            $nroRespuestas=$this->devuelveNumeroTotalPreguntas($idTema);
?>
                <form name="frmPreguntas" id="frmPreguntas">
                <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >
                    <tr>
			<td colspan="6" style="font-size: 12px;font-weight: bold;">5) = Excelente, 4) = Muy Bueno, 3) = Bueno, 2) = Regular, 1) = Deficiente</td>
		    </tr>
		    <tr>
                      <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>CONCEPTO</strong></span></td>
                      <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">1</td>
                      <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">2</td>
                      <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">3</td>
                      <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">4</td>
		      <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">5</td>
                    </tr>
<?
            $i=$nroPregunta;
            while($rowP=mysql_fetch_array($resP)){
		$nombreRadio="P".$i;
?>
                    <tr>
                       <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong><? echo $i."- ".utf8_encode($rowP["nombreCompetencia"]);?></strong></td>
                       <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="1" onclick="actualiza(this,<?=$i;?>)" /></td>
                       <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="2" onclick="actualiza(this,<?=$i;?>)" /></td>
                       <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="3" onclick="actualiza(this,<?=$i;?>)" /></td>
                       <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="4" onclick="actualiza(this,<?=$i;?>)" /></td>
		       <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="5" onclick="actualiza(this,<?=$i;?>)" /></td>
                    </tr>
<?
		$i+=1;
            }
?>         
                </table></form>
                </div>                
		<p align="right" style="margin-right:10px;"><a href="javascript:validarRespuestas('<?=$nroRespuestas;?>','<?=$idTema+1;?>','<?=$i;?>');" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p>
                <div id="preguntasDiv"></div>
            </div>            
<?             
	    }
	}
        
        private function devuelvePreguntasTema($idTema){            
            $sqlP="select * from competencias where id_temaevaluacion='".$idTema."'";
            $resP=mysql_query($sqlP,$this->conexionBd());
            return $resP;
        }
        
        private function devuelveNumeroTotalPreguntas($idTema){
            $sqlTP="select * from competencias where id_temaevaluacion='".$idTema."'";
            $resTP=mysql_query($sqlTP,$this->conexionBd());	
            return mysql_num_rows($resTP);            
        }
        
        private function devuelveTemaEncuesta($idTema){
            $sqlTema="SELECT * FROM temaEvaluacion WHERE id='".$idTema."'";
            $resTema=mysql_query($sqlTema,$this->conexionBd());
            $rowTema=mysql_fetch_array($resTema);            
            if(mysql_num_rows($resTema)!=0){
                $temaActual=$rowTema["nombreTema"];
            }else{
                $temaActual="Sin Tema";
            }
            return $temaActual;
        }
            
        private function estilosEncuesta(){
            echo "<style type='text/css'> .Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;color: #0000FF;font-size: 24px;} .Estilo5 {font-size: 14px;font-weight:bold;}</style>";
        }
        
        public function objetivo(){
            $this->mostrarCabecera();
	    echo "<style type='text/css'>
            .Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;color: #0000FF;font-size: 24px;}
            .Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 14px;}
            .Estilo3 {font-size: 24px;font-weight: bold;}
            .Estilo4 {font-size: 10px;font-weight: bold;}
            .Estilo5 {font-size: 18px}
            </style>";
?>
            
            <div id="Mensaje" style="size:90%; border:2 px solid #000000;" >
                <p align="center" class="Estilo1">Introducci&oacute;n</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;margin: 10px;">Para conocer los detalles sobre la evaluaci&oacute;n de click en el siguiente enlace: [ <a href="documento/Evaluacion.pdf" target="_blank" style="color: blue;text-decoration: none;" title="Ver Archivo">Ver Archivo</a> ]</p>
		<!--
		<p class="Estilo2" style="text-align: justify;width: 98%;">Una de las inquietudes más importantes que existen en IQ International, es la relativa al ambiente de trabajo y clima interno en que se desenvuelven los empleados y trabajadores.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Para la empresa, es de suma importancia ayudar a crear y mantener un lugar de trabajo gratificante que satisfaga y enorgullezca al personal.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Gran parte de la vida de las personas se dedica al trabajo. Hacerlo en un lugar grato, es un compromiso y preocupación constante en la empresa, y se está convirtiendo en un objetivo institucional.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Es por ello que estamos instituyendo esta Encuesta de Clima Interno, con el afán de conocer el pensar, sentir y desear del personal, y así poder implementar acciones que cumplan con este objetivo citado.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">La encuesta es anónima, no será necesario que anoten su nombre.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Todas las respuestas serán tratadas como confidenciales. No existe la posibilidad de identificar a nadie. Estas respuestas no serán vistas por persona alguna dentro de la empresa. No se realizará ningún informe para grupos integrados por menos de cinco personas, de tal manera que no se podrá deducir quién fue el que dio tal o cual respuesta. </p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Las respuestas de cada persona son sumamente importantes. Por favor conteste todas las preguntas en forma exacta, cuidadosa y honesta.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Cada reactivo deberá contestarse con datos numéricos de acuerdo al baremo siguiente:</p>
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
		-->
                <p>&nbsp;</p>
		<p style="margin: 10px;font-size: 16px;font-weight: bold;">I. DATOS DEL EVALUADO</p>
		<table border="0" cellpading="1" cellspacing="1" width="600" style="margin: 10px;">
		    <tr>
			<td width="200">Fecha:</td>
			<td width="400"><input type="text" name="txtFechaEv" id="txtFechaEv" style="width: 250px;" value="<?=date("Y-m-d");?>"></td>
		    </tr>
		    <tr>
			<td>Nombre:</td>
			<td><input type="text" name="txtNombreEv" id="txtNombreEv" style="width: 250px;"></td>
		    </tr>
		    <tr>
			<td>Puesto:</td>
			<td><input type="text" name="txtPuestoEv" id="txtPuestoEv" style="width: 250px;"></td>
		    </tr>
		    <tr>
			<td>Gerencia:</td>
			<td><input type="text" name="txtGerenciaEv" id="txtGerenciaEv" style="width: 250px;"></td>
		    </tr>
		    <tr>
			<td>Ubicaci&oacute;n f&iacute;sica</td>
			<td><input type="text" name="txtUbicacionEv" id="txtUbicacionEv" style="width: 250px;"></td>
		    </tr>
		</table>
		<p>&nbsp;</p>
		<p style="margin: 10px;font-size: 16px;font-weight: bold;">II. DATOS DEL EVALUADOR</p>
		<table border="0" cellpading="1" cellspacing="1" width="800" style="margin: 10px;">
		    <tr>
			<td>Relaci&oacute;n con el evaluado</td>
			<td style="text-align: left;">
			    Autoevaluaci&oacute;n<input type="radio" value="autoevaluacion" name="rdbEvaluador" id="rdbEvaluador"><br>
			    Jefe inmediato<input type="radio" value="jefeInmediato" name="rdbEvaluador" id="rdbEvaluador"><br>
			    Colaborador<input type="radio" value="colaborador" name="rdbEvaluador" id="rdbEvaluador"><br>
			    Colega<input type="radio" value="colega" name="rdbEvaluador" id="rdbEvaluador"><br>					    
			</td>
		    </tr>
		</table>
		
		
		
		<p>&nbsp;</p>
                <!--<p align="center"><a href="javascript:ajax('div_resultados','action=guardaPrimerosDatos&idTema=1&nroPregunta=1','div_presentacion');" style="font-size:30px; color:#06F; text-decoration:none;">Siguiente</a></p>-->
		<p align="center"><a href="javascript:datosIniciales();" style="font-size:30px; color:#06F; text-decoration:none;">Siguiente</a></p>
            </div>
<?
        }
        
        public function presentacion(){
	    session_start();
	    $_SESSION["respuestas_globales"]=array();
            //presentacion de la encuesta
            $this->mostrarCabecera();
?>
            <div id="Mensaje" style="size:900px; border:2 px solid #000000;" >
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p align="center" class="Estilo1">&nbsp;</p>
                <p align="center" class="Estilo2">&nbsp;</p>
                <p align="justify" class="Estilo2">&nbsp;</p>
                <p align="justify" class="Estilo2"></p>
            </div>
            <p align="center"><a href="javascript:ajax('div_resultados','action=objetivo','div_presentacion');" style="font-size:30px; color:#06F; text-decoration:none;">Iniciar Evaluaci&oacute;n</a></p>
            <p align="center">&nbsp;</p>
<?
        }//fin de la funcion presentacion
        
        
        private function mostrarCabecera(){
            //cabecera a mostrar en toda la encuesta
	    echo"<style type='text/css'>
            .Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;color: #0000FF;font-size: 14px;}
            .Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 9px;}
            .Estilo3 {font-size: 12px;font-weight: bold;}
            .Estilo4 {font-size: 10px;font-weight: bold;}
            .Estilo5 {font-size: 12px}
            .Estilo6 {font-size: 12px;font-weight: bold;}
            .Estilo7 {font-family: Verdana, Arial, Helvetica, sans-serif}
            .Estilo8 {font-size: 12px}
            .Estilo9 {font-size: 12px;font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;}
            .x {text-align: center;}
            #Mensaje .Estilo2 {text-align: center;}
            </style>";
	    /*echo "<div align='center'>
                    <div id='cabecera' style='border: 1px solid #000000;'>
                        <table width='100%' border='1' style='font-size: 12px;font-family: Verdana,Arial,Helvetica, sans-serif;'>
                            <tr>
                                <td width='191' rowspan='2' style='text-align: center;'><img src='img/LogoII.gif' width='100' height='75' border='0' /></td>
                                <td align='center' width='303'>REVISI&Oacute;N: 01 </td>
                                <td align='center' width='289'>CLAVE:IQFO640101</td>
                                <td align='center' width='195'>EMISI&Oacute;N:23/11/09</td>
                            </tr>
                            <tr>
                                <td align='center' colspan='2'><p>ENCUESTA CLIMA LABORAL</p></td>
                                <td align='center'>P&Aacute;GINA:1 DE 14</td>
                            </tr>
                        </table>
                    </div>
                </div>";*/
	    echo "<div align='center'>
                    <div id='cabecera' style='border: 0px solid #000000;'>
			<table width='100%' border='0' style='font-size: 12px;font-family: Verdana,Arial,Helvetica, sans-serif;'>
			    <tr>
				<td style='text-align:center;font-weight:bold;font-size:18px;height:40px;'>
				EVALUACI&Oacute;N 360&deg;
				</td>
			    </tr>
			    <tr>
				<td style='text-align:center;font-size:16px;height:50px;'>
				Dimensi&oacute;n de competencias gen&eacute;ricas<br>(Confidencial)				
				</td>
			    </tr>
			</table>
		    </div>
		 </div>";   
        }//fin de la funcion cabecera
        
    }//fin de la clase
?>