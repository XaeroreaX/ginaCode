<?php 
echo "Hola mundo";

$nombre = "Juan";
$apellido = "Perez";

echo "<br> Su nombre es" .$nombre;

echo "<br> Su nombre es $nombre";

echo '<br> Su nombre es $nombre';

echo "<br> Su nombre es {$nombre}";

echo '<br> Su nombre es {$nombre} <br>';

$numero = 1;

while($numero <= 1000)
{
    echo "$numero <br>";
    $numero++;
}

//ejercicio 05
/*
$b = 1;
$c = 2;
$a = 3;

$mayor = 0;
$menor = 10;

if($b > $a && $b < $c)
{
    echo "<br> $b <br>";
}
elseif($a > $b && $a < $c)
{
    echo "<br> $a <br>";
}
elseif($c > $b && $c > $a)
{
    echo "<br> $c <br>";
}
*/

function getDateTimeValue( $intDate = null ) {

    $strFormat = 'd \d\e M \d\e\l Y';
    $strDate = $intDate ? date( $strFormat, $intDate ) : date( $strFormat ) ; 
    
    return $strDate;
}

echo getDateTimeValue();
echo "<br>", date("l");


//$vec = array (1,2,3,4,5,6,7,8,9);
//var_dump ($vec);
//foreach($vec as $clave => $valor)

$vec = array (1,2,3,4,5);
$i = 0;

for ($i=0;$i<4;$i++)
{
    $vec[$i] = rand(1,90);
}

var_dump ($vec);
//print_r($vec);

$lapicera = array ("Color" => "Rojo", "Marca" => "Bic", "Trazo" => "Grueso", "Precio" => 10.49);
$lapicera1 = array ("Color" => "Azul", "Marca" => "Bic", "Trazo" => "Fino", "Precio" => 8.79);
$lapicera2 = array ("Color" => "Amarillo", "Marca" => "Faber", "Trazo" => "Medio", "Precio" => 17.20);

echo "Color: " . $lapicera["Color"] . ", Marca: " . $lapicera["Marca"] . " y sale $ " . $lapicera["Precio"] . ".";



//$lapicera[1]; 
phpinfo();



?>