<?php


class Rectangulo extends FiguraGeometrica{

    private $_ladoUno;
    private $_ladoDos;
    public function __construct($L1,$L2)
    {
        parent::__construct();
        $this->_ladoUno=$L1;
        $this->_ladoDos=$L2;
        $this->CalcularDatos();
    }
    public function CalcularDatos()
    {
        $this->_perimetro=$this->_ladoUno*2+$this->_ladoDos*2;
        $this->_superficie=$this->_ladoUno*$this->_ladoDos;
    }
    public function Dibujar()
    {
        $retorno="<div style='color:".$this->GetColor()."'>";
        for($i=1;$i<=$this->_ladoUno;$i++)
        {
            for($j=1;$j<=$this->_ladoDos;$j++)
            {
                $retorno=$retorno."*";
             
            }
            $retorno=$retorno."</br>";
        }
        return  $retorno."</div>";
    }
    public function ToString()
    {
        return parent::ToString()."</br>".$this->Dibujar();
    }
}



?>