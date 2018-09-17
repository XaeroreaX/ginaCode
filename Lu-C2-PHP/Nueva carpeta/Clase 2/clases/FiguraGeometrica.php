<?php

abstract class FiguraGeometrica {

    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    public function __construct($_color="Red", $_perimetro, $_superficie)
    {
        $this -> _color = $_color
        $this -> _perimetro = $_perimetro;
        $this -> _superficie = $_superficie;
    }

    public function GetColor($_color)
    {
        return $this ->_color;
    }

    public function SetColor($_color)
    {
        $this ->_color = $_color;
    }

    class CalcularDatos extends rectangulo



}