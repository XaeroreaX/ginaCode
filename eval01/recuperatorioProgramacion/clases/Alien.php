<?php


class Alien
{
    private $_planeta;
    private $_email;
    private $_password


    public __construct($planeta, $email, $password)
    {
        $this->_planteta = $planeta;
        $this->_email = $email;
        $this->_password = $password;
    }

    public function Equals($alien)
    {
        $bool = false;

        if($this->_planeta === $alien->_planeta)
        {
            if($this->_email === $alien->_email)
            {
                if($this->_password === $alien->_password)$bool = true;
            }
        }

        return $bool;
    }


    public function EqualsPlaneta($alien)
    {
        $bool = false;

        if($this->_planeta === $alien->_planeta)
        {
            $bool = true;
        }

        return $bool;
    }
    public function ToJSON()
    {

        return json_decode("{'planeta' : '".$this_planeta."','email' : '".$this->_email."', 'password' :'". $this_password."'}");

    }


    public function GuardarEnArchivo()
    {

        

        $returnJSON = json_decode("{'exito' : 'true', 'mensaje' : 'se guardo con exito'}");

        try
        {
            $pArch = fopen(".archivo/Alien.json", "a+");

            fwrite(json_encode($this->ToJSON()."\n"));


        }

        catch(exception $e)
        {
            $returnJSON = json_decode("{'exito' : 'false', 'mensaje' : '".$e->getMessage()."'}");
        }


        fclose($pArch);

        return $returnJSON;

    }

    public function TraerTodos()
    {
        $array;

        try
        {
            $pArch = fopen(".archivo/Alien.json", "r");

            while(!feof($pArch))
            {
                $json = json_decode(fgets($pArch));

                $array = array_push(new Alien($json["planeta"], $json["email"], $json["password"]));
            }

        }

        catch(exception $e)
        {
            $array = json_decode("{'exito' : 'false', 'mensaje' : '".$e->getMessage()."'}");
        }

        fclose($pArch);

        return $array;
    }



    public function VerificarExistencia($existe)
    {
        $boolExiste = false;


        

        $array = $this->TraerTodos();


        foreach($array as $element)
        {
            $bool = $element->Equals($existe);

            if($bool === true) break;
        }



    }

    private function planetasMasPopulares($array)
    {
        $cont = 0;
        $planetas;
        $arrayJson;

        foreach($array as $element)
        {
            if(!$this->arrayExiste($planetas, $element->_planeta)) $planetas = array_push($element->_planeta);



        }

        foreach($planeta as $element)
        {
            $arrayJson = array_push(json_decode("{'planeta' : '".$element."', 'count' : '".$this->planetCount($array, $element)."'}"))
        }

        $arrayJson = $this->ranking($arrayJson);

        foreach($arrayJson as $element)
        {
            $planeta
        }




    }

    private function arrayExiste($array, $existe)
    {

        $bool = false;

        foreach($array as $element)
        {
            if($element === $existe) $bool = true;
        }

        return $bool;
    }

    private function planetCount($array, $planeta)
    {
        $count = 0;

        foreach($array as $element)
        {
            if($element->_planeta === $planeta) $count++;

        }

        return $count;
    }

    private function ranking($arrayJson)
    {
        $auxiliar;

        for($i = 0; $i < $arrayJson->count() - 1; $i++)
        {
            for($j = 1; $j < $arrayJson->count(); $j++)
            {
                if($arrayJson[$i]['count'] < $$arrayJson[$j]['count'])
                {
                    $auxiliar = $arrayJson[$i];
                    $arrayJson[$i] = $arrayJson[$j];
                    $arrayJson[$j] = $auxiliar;
                }
            }
        }

        return $arrayJson;

    }

    

}







?>