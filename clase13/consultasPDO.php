<?php

    require_once "./classCD.php";

    $id = $_POST['id'];
    try
    {
        $conStr = "mysql:host = localhost;dbname=cdcol";

        $pdo = new PDO($conStr, 'root', "");

        

        $sp = $pdo->query('SELECT titel AS titulo, interpret AS interprete, jahr AS anio, id AS id FROM cds');

        $sp->Execute();
/*
        while($fila = $sp->fetch(PDO::FETCH_LAZY))
        {

            $obj = new stdClass();
            $obj->id = $fila['id']; 

            $obj->interprete = $fila['interprete']; 

            $obj->titulo = $fila['titulo'];
            
            $obj->anio = $fila['anio']; 

            $array[] = $obj;

            
        }


        $json = json_encode($array);


        var_dump($json);
*/


        $sp->setFetchMode(PDO::FETCH_INTO, new CD);

        foreach($sp AS $cd)
        {
            echo $cd->toString()."<br>";
        }

       //echo "exception?";

    }

    catch(PDOexception $e)
    {
        echo $e->errorInfo;
    }

    catch(exception $e)
    {
        echo "exception?";
    }

    

?>