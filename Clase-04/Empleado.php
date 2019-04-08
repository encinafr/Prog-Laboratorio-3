<?php
    class Empleado{

    public $Apellido;
    public $Nombre;
    public $Legajo;
    public $Sueldo;
    public $Path_foto;

    public function __construct($l, $name, $lastname, $s, $path){
        $this->nomnre = $name;
        $this->Apellido = $lastname;
        $this->Legajo = $l;
        $this->Sueldo = $s;
        $this->Path_foto = $path;
    }

    public static function Agregar($empleado)
    {
        $fp = fopen("Empleado.txt","a");
        $ok = fwrite($fp,$empleado->ToString()."\r\n");
        if($ok >0)
        {
         return true;
        }
        fclose($fp);
    }

    public static function TraerTodos(){
        $fp =fopen("Empleado.txt","r");
        $empArray = array();
         
        
        while(!feof($fp))
        {
            $stringEmpleado = fgets($fp);
            if($stringEmpleado == "")
            {
                continue;
            }
            $arrayEmpleado = explode("-",$stringEmpleado);
            array_push($empArray, new Empleado($arrayEmpleado[0],$arrayEmpleado[1],$arrayEmpleado[2],$arrayEmpleado[3],$arrayEmpleado[4]));
        }
        return $empArray;
    }

    public function ToString(){
        return $this->Legajo.'-'.$this->Nombre.' - '.$this->Apellido.'-'.$this->Sueldo.'-'.$this->Path_foto;
    }

}
?>
