<?php

    require_once("./clases/Usuario.php");


    $usuario = new Usuario($_POST["email"], $_POST["password"]);

    var_dump($usuario->GuardarEnArchivo());
    
    

    






?>