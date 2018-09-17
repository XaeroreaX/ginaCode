<?php

class Rectangulo extends FiguraGeometrica
{
    private $_ladoDos;
    private $_ladoUno;

    public function __construct($l1, $l2)
    {
        $this -> _ladoDos = $l1;
        $this -> _ladoUno = $l2;
    }

    protected CalcularDatos($l1, $l2)
    {
        parent::__construct($l1, $l2);
    }

    public function Dibujar($color)
    {
        // <p style="font-color: #ff0000"></p>;
        // <p style="color:red"></p>;



    }

    /*
//triangulo

class triangulo 
{ 
     
    function __construct($cateto) 
    { 
        $this->cateto = $cateto; 
    } 
 
    function sacaTriangulo() 
    { 
        for($i = 1; $i <= $this->cateto; $i++){ 
            echo "X"; 
            $escrito = 1; 
             
            while($escrito < $i){ 
                echo "X"; 
                $escrito++; 
            } 
            echo "<br />"; 
        } 
    } 
} 
 
$cateto = 4; 
$triangulo = new Triangulo($cateto); 
$triangulo->sacaTriangulo(); 
    */


    /*
    function crear_piramide ($filas) {
    $cadena = null;
    for ($i = 1; $i <= $filas; $i++) {
        for ($h = $i; $h <= $i; $h++) {
            $cadena .= "*";
        }
        echo $cadena."<br />";
    }
}
 
// Forma de uso
crear_piramide (9);
    */



    //rectangulo
    /*
    for(i=0;i<al;i++) 
    { 
        for(j=0;j<an;j++) 
        { 
            if((i==0)||(j==0)) 
            { 
            printf("%c",caracter); 
            } 
            else 
            { 
            if((j!=an)||(i!=al)) 
            { 
            printf(" "); 
            } 
            } 
        } 
     printf("\n");
    */
}