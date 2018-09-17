<?php



private $_codBarra;
private $_nombre;

public function __construct($codBarra="0", $nombre="")
{
    $this ->$_codBarra = $codBarra;
    $this ->$_nombre = $nombre;
}

public function GetBarra()
{
    return $this ->$_codBarra;
}

public function SetBarra($codBarra)
{
    $this->$_codBarra = $codBarra;
}

public function GetNombre()
{
    return $this ->$_nombre;
}

public function SetBarra($nombre)
{
    $this->$_nombre = $nombre;
}

public function ToString()
{
    $resp = $this ->GetNombre() . "-" . $this ->GetBarra(). "\r\n";
    return $resp;
}

public static function Guardar($obj)
{
    if($obj instanceof producto)
    {
        $archivo = fopen("productos.txt", "a+");
    }
    fwrite($archivo, $obj->ToString());
    fclose($archivo);
}

public static function traerTodos()
{
    $arrayProductos = array();
    $file = fopen("productos.txt", "r");

    while(!feof($file))
    {
        $stringProd = fgets($file);
        $auxProd = explode("-", $stringProd);
        $producto = new Producto($auxProd[0], $auxProd[1]);
        array_push($arrayProductos, $producto);
    }
    fclose($file);

    return $arrayProductos;

}


?>