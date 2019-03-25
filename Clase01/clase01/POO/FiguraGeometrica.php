
<?php

abstract class FiguraGeometrica{

    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    public function _construct()
    {

    }

    protected abstract function CalcularDatos();
    protected abstract function Dibujar();
    protected abstract function GetColor();
    protected abstract function SetColor($color);
    protected abstract function ToString();

}


?>