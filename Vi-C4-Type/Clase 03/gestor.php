<?php

$opcion = $_GET["opcion"];
$datos = $_GET["datos"];

switch($opcion){
    case "guardarEnArchivo":
        $archivo = fopen("alumnos.txt", "a");

        $cantidad = fwrite ($archivo, $datos, "\r\n");
        fclose($archivo);
        if($cantidad >0)
        {
            echo "true";
        }
        else{
            echo "false";
        }
        break;
default:
    break;
}


?>