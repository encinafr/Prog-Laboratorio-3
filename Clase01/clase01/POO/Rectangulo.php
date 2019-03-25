<?php


class Rectangulo extends FiguraGeometrica{

    public $_ladoUno;
    public $_ladoDos;

    public function _construct($l1,$l2){
        parent::_construct();
        CalcularDatos();
        $this->lad = $l1;
        $this->_ladoUno = $l2;
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
        parent::$_perimetro_perimetro  = 2*($_ladoUno+$_ladoDos);
        parent::$_superficie = $_ladoUno * $_ladoDos;
    }

    public function Dibujar(){
        echo(GetColor());
        for($i=0;$i<=$this->_ladoDos;$i++)
        {
            for($j=0;$j<=$this->_ladoUno;$j++)
            {
                $retorno=$retorno."*";
            }
            $retorno=$retorno."</br>";
        }
        return  $retorno;
    }

    public function ToString(){
        echo($_ladoUno);
        echo($_ladoDos);
        Dibujar();
    }
}



?>