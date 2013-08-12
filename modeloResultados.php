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
    class modeloEvaluacionResultados{
        
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
        
	public function mostrarEvaluados(){
            $sql="SELECT * FROM `encuestas2` ORDER BY `P2`";
            $res=mysql_query($sql,$this->conexionBd());
            if(mysql_num_rows($res)==0){
                echo "<br>No existen personas evaluadas.<br>";
            }else{
?>
                <table border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 12px;margin: 10px;background: #FFF;border: 1px solid #CCC;">
                    <tr>
                        <td width="500" style="background: #F0F0F0;border: 1px solid #CCC;height: 20px;padding: 5px;text-align: left;">Evaluados</td>
                        <td width="200" style="background: #F0F0F0;border: 1px solid #CCC;height: 20px;padding: 5px;text-align: center;">Acciones</td>
                    </tr>
<?
                while($row=mysql_fetch_array($res)){
		    $token=md5($row["id_per"]).$row["id_per"];
?>
                    <tr class="estiloFilaTabla">
                        <td width="500" class="estiloFilaCelda" style="text-align: left;"><?=$row["P2"];?></td>
                        <td width="200" class="estiloFilaCelda" style="text-align: center;">
			    <a href="evaluacion.php?idEv=<?=$token;?>" target="_blank" title="Ver Evaluacion" style="color: blue;font-weight: bold;">Ver Formato 1</a> |
			    <a href="evaluacion2.php?idEv=<?=$token;?>" target="_blank" title="Ver Evaluacion" style="color: blue;font-weight: bold;">Ver Formato 2</a>
			</td>
                    </tr>
<?
                }
?>
                </table>
<?
            }
        }
        
    }//fin de la clase
?>