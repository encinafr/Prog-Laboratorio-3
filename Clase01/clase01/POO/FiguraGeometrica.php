
<?php

abstract class FiguraGeometrica{

    protected $_color;
    protected $_perimetro;
    protected $_superficie;
    public function __construct()
    {
        $this->_color="Red";
        $this->_perimetro=0;
        $this->_superficie=0;
    }
    public function GetColor()
    {
        return $this->_color;
    }
    public function SetColor($color)
    {
        $this->_color=$color;
    }
    
     abstract function Dibujar();
     abstract function CalcularDatos();

    public function ToString()
    {
        return "Color: ". $this->_color."</br>Perimetro: ".$this->_perimetro."</br>Superficie: ".$this->_superficie;
    }

}


?>