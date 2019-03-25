<?php


class Triangulo extends FiguraGeometrica{

    public $_altura;
    public $_base;

    public function _construct($b,$h){
        parent::_construct();
        CalcularDatos(); 
        $this->_altura = $b;
        $this->_base= $h;
    }

    public function GetColor()
    {
        return parent::$_color;
    }

    public function SetColor($color)
    {
        parent::$_color = $_color;
    }


    protected function CalcularDatos(){
        parent::$_perimetro = 3*$_base;
        parent::$_superficie = $_base * ($_altura/2);
    }

    public function Dibujar(){
        $this->GetColor();
        echo "	*	<br>";
		echo " ***  <br>";
		echo "***** <br>";
    }

    public function ToString(){
        $this->Dibujar();
        echo($_altura);
        echo($_base);
    }
}



?>