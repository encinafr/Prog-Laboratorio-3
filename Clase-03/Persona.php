<?php

 class Persona{

    public $nombre;
    public $apellido;


    public function __construct($name,$lastname){
        $this->nombre;
        $this->apellido;
    }
    public function Guardar(){
        
        $fp = fopen("Files/Persona.txt","a");

        $ok = fwrite($fp,$this->ToString()."\r\n");

        if($ok >0)
        {
         return true;
        }

        fclose($fp);

    }

    public function Leer(){
        $fp =fopen("Files/Persona.txt","r");



       while(!feof($fp))
       {
           $file = fgets($fp);
        echo("<h1>$file</h1><br>");
       }

        

        fclose($fp);
    }


    public static function TraerTodasLasPersonas(){

        $fp =fopen("Files/Persona.txt","r");
        $personArray = array();
         
        
        while(!feof($fp))
        {
            $stringPersona = fgets($fp);

            if($stringPersona == "")
            {
                continue;
            }

            $arrayPersona = explode("-",$stringPersona);
            array_push($personArray, new Persona($arrayPersona[0],$arrayPersona[1]));
        }

    }

    public function ToString(){
        return $this->nombre.' - '.$this->apellido;
    }
    


}


?>