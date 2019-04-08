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


    public function ToString(){
        return $this->Legajo.'-'.$this->Nombre.' - '.$this->Apellido.'-'.$this->Sueldo.'-'.$this->Path_foto;
    }

}
?>
