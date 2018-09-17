<?php

$nombre = $_POST["txtNombre"];
$imgFinal = date("j, n, Y") . " - " . $_FILES["archivo"]["name"];
$extension = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);
$archivo = fopen("./fotos_subidas.txt", "a+");
$escribo = fwrite($archivo, $nombre. " - " . $imgFinal. "\r\n");

if ($_FILES["archivo"]["name"] > 0)
{
    echo "Error: ". $_FILES["archivo"]["name"] . "<br>";
}else{
    if(move_uploaded_file($_FILES["archivo"]["name"], "./archivo/". $imgFinal)){
        echo "<br><br> Archivo " . $_FILES["archivo"]["name"]. " . Subido correctamente como: " . $imgFinal;
    }else{
        echo "<br><br> Error al subir imagen: ". $_FILES["archivo"]["name"];
    }
}
?>