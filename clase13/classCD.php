<?php

class CD
{

    public $id;
    public $titulo;
    public $inteprete;
    public $anio;



    public function toString()
    {
        return ":**".$this->id."**". $this->titulo."**".$this->interprete."**".$this->anio.":";   
    
    
    }


}




?>