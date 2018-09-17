<?php

$nombre = $_GET["nombre"];

//lectura y escritura de un archivo de texto en PHP

/*
$archivo = fopen("archivos/miArchivo.txt", "w");

$cantidad = fwrite($archivo, date("F j, Y, g:i a"));

if($cantidad >0)
{
    echo "exito";
}
else
{
    echo "no se escribio";
}

fclose($archivo);
*/

$nombre = "Juan";

$archivo = fopen("archivos/miArchivo.txt", "a");


$cantidad = fwrite($archivo, date("F j, Y, g:i a"). "<br>". $nombre . "<br>");

if($cantidad >0)
{
    echo "exito";
}
else
{
    echo "no se escribio";
}

rewind($archivo);

fclose($archivo);


//lectura

$archivo = fopen("archivos/miArchivo.txt", "r");

while(!feof($archivo))
{
    echo "<h4>" . fgets($archivo) . "</h4>";
}

fclose($archivo);

?>