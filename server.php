<?php
    require_once 'lib/nusoap.php';
    function getAnimales($datos){
        if($datos == 'Animales'){
            return join(",", array(
                "Perro",
                "Gato",
                "Vaca",
                "Pajaro",
                "mariposa",
                "jirafa"
            )
               
            );
        }
        else{
            return "No hay datos";
        }
    }
    $server = new soap_server(); // creamos instancia de soap
    $server->register("getAnimales"); // indica el metodo o funcion a devolver
    if(!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA=file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA); 

?>