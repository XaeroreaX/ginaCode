<?php


    $fotoBool = move_uploaded_file($_FILES["foto"]["name"], "./fotos");

    $option = $_POST["que_hago"];
    

    $booleanoAux;

    $rewso;

    $row;

    switch($option)
    {
        case "Conectarme":
            $booleanoAux = mysql_connect("localhost", "root","");
            if($booleanoAux == true)
                echo "conecto!!!";

            break;
        case "Ejecutar":
            $booleanoAux = mysql_connect("localhost", "root","");
            if($booleanoAux == true)
            {
                $rewso = mysql_db_query("cdcol", "SELECT * FROM `cds` where id = '7'");

                $row = mysql_fetch_object($rewso);

                var_dump($row);

            }
            break;
        case "TraerTodos":

            $booleanoAux = mysql_connect("localhost", "root","");
            if($booleanoAux == true)
            {
                $i = 4;



                    for($i = 1; $i < 8 ; $i++)
                    {
                        

                        $row = mysql_fetch_object($rewso);
                        
                        var_dump($row);
                    }
                   


                
                
            }

            break;
        case "Update":

            $rewso = mysql_db_query("cdcol", "UPDATE `cds` SET `titel`='".$_POST["titel"]."',`interpret` = '".$_POST["interpret"]."', `jahr`= '".$_POST["jahr"]."',`foto`= '".$_FILES["foto"]["name"]."' WHERE id = '7'");
            
            $row = mysql_fetch_object($rewso);
                        
            var_dump($row);
            

            break;
        default:
            echo "no se selecciono nada";
    }





?>