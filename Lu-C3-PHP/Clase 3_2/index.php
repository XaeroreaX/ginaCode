<?php

include_once("./producto.php");

$obj = new producto($_POST["codigo"], $_POST["nombre"]);
echo $obj->ToString();
Producto::Guardar($obj);

?>