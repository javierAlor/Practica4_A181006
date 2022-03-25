<?php
    require_once "lib/nusoap.php";
    $cliente = new nusoap_client("http://localhost/practica4rpo/server.php");

    $error = $cliente->getError();
    if($error){
        echo "<h2>Constructor error</h2><pre>". $error. "</pre>";

    }

    $result = $cliente->call("getAnimales", array("datos" => "Animales"));
    if($cliente->fault){ // checamos la falla al momento de llamar el metodo
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else{ // no hay error al llamar el metodo
        $error = $cliente->getError();
        if($error){
            echo "<h2>error</h2>". $error. "</pre>";
        }
        else{
            echo "<h2>Animales</h2><pre>";
            echo $result;
            echo "</pre>";
        }
    }
?>