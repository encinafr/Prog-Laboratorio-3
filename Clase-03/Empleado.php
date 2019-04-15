<?php

class Empleado{
    public $nombre;
    public $apellido;
    public $dni;
    public $sexo;
    public $sueldo;
    public $legajo;

    public function __construct($name){
       $this->nombre = $name;
    }
     
    public function setName($name){
        $this->nombre = $name;
    }

    public function Guardar(){
        
        $fp = fopen("Empleados.txt","a");
        $ok = fwrite($fp,$this->ToString()."\r\n");
        if($ok >0)
        {
         return true;
        }
        fclose($fp);
    }

    public function ToString(){
        return $this->nombre;
    }

    
}


?>