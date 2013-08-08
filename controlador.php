<?php
    include("modeloEncuesta.php");
    $objEncuesta=new modeloEncuesta();
    $action=$_POST["action"];
    
    switch($action){
        case "presentacion":
            $objEncuesta->presentacion();
        break;
        case "objetivo":
            $objEncuesta->objetivo();
        break;
        case "encuesta":             
            $objEncuesta->mostrarPreguntasEncuesta($_POST["idTema"],$_POST["nroPregunta"]);
        break;
        case "guardarRespuestas":
            $objEncuesta->guardarRespuestasTema($_POST["respuestasP"],$_POST["idTema"],$_POST["nroPregunta"]);
        break;
        case "gracias":
            $objEncuesta->gracias($_POST["depto"]);
        break;
        case "guardarEncuesta":
            $objEncuesta->guardarEncuesta();
        break;
        case "guardarDatosIniciales":
            //print_r($_POST);
            $objEncuesta->guardarDatosIniciales($_POST["txtFecha"],$_POST["txtNombre"],$_POST["txtPuesto"],$_POST["txtGerencia"],$_POST["txtUbicacion"],$_POST["relacion"]);
        break;
        case "guardaComplemento":
            //print_r($_POST);
            $objEncuesta->guardaComplemento1($_POST["complementoA"],$_POST["complementoB"],$_POST["complementoC"],$_POST["evaluador"]);
        break;
    }
?>