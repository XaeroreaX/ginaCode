<?php

class Auto
{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    public function __construct($marca, $color=null, $precio=0, $fecha='2000-01-01')
    {
        $this->_color = $color;
        $this->_marca = $marca;

        if ($color != null)
        {
            $this ->_color = $color;
        }

        if ($precio != 0)
        {
            $this ->_precio = $precio;
        }

        if ($fecha != '2000-01-01')
        {
            $this ->_fecha = $fecha;
        }

    }

    public static AgregarImpuestos($precio)
    {
        return $precio + $precio *0.15;
    }

    public MostrarAuto($obj)
    {
        echo "Caracteristicas del auto: {$this->_color}";
    }

    
}