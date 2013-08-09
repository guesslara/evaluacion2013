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
            $sql="SELECT COUNT( * ) AS `Filas` , `P2` FROM `encuestas2` GROUP BY `P2` ORDER BY `P2`";
            $res=mysql_query($sql,$this->conexionBd());
            if(mysql_num_rows($res)==0){
                echo "<br>No existen personas evaluadas.<br>";
            }else{
?>
                <table border="0" cellpadding="1" cellspacing="1" width="700" style="font-size: 12px;margin: 10px;">
                    <tr>
                        <td width="550" style="height: 20px;padding: 5px;text-align: left;">Evaluados</td>
                        <td width="150" style="height: 20px;padding: 5px;text-align: center;">Acciones</td>
                    </tr>
<?
                while($row=mysql_fetch_array($res)){
?>
                    <tr class="estiloFilaTabla">
                        <td width="550"><?=$row["P2"];?></td>
                        <td width="150"><a href="#" title="Ver Evaluacion" style="color: blue;font-weight: bold;">Ver Evaluaci&oacute;n</a></td>
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