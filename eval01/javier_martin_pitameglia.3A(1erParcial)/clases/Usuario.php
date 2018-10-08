<?php

class Usuario
{

    private $_email;
    private $_password;

    function __construct($email, $password)
    {
        $this->_email = $email;
        $this->_password = $password;
    }

    public function ToJSON()
    {




        $JSON = json_encode(array("email" => $this->_email, "password" => $this->_password));

        return $JSON;


    }


    public function GuardarEnArchivo()
    {

        $JSON;
        $file;

        //echo "entre";

        try
        {
            $file = fopen('C:\xampp\htdocs\javier_martin_pitameglia.3A(1erParcial)\clases\archivo\Usuario.JSON', "a+");

            fwrite($file,"". $this->ToJSON()."\n");


            $JSON = json_encode(array("exito" => true, "mensaje" => "se agrego en el archivo!!!"));

            //var_dump($JSON);

        }

        catch(Exception $e)
        {
            $JSON = json_encode(array("exito" => false, "mensaje" => $e->message));

        }

        finally
        {
            fclose($file);
        }

        return $JSON;

    }



    public function TraerTodos()
    {
        $file;
        $string;
        $JSON;
        $array;

        try
        {
            $file = fopen("./archivo/Usuario.JSON", "r+");

            while(!feof($file))
            {
                $string = fgetc($file);

                $JSON = json_decode($string);

                $array = array_push(new Usurio($JSON["email"], $JSON["password"]));

            }

        }

        catch(Exception $e)
        {
            $array = NULL;
        }

        finally
        {
            fclose($file);
        }


        return $array;


    }

    public function Equals($usuario)
    {
        if($this->_password === $usuario->_password && $this->_email === $usuario->_email) return true;

        return false;
    }

    

}








?>