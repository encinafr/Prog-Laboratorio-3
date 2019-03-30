<?php


class Triangulo extends FiguraGeometrica{

    private $_base;
    private $_altura;
    public function __construct($h)
    {
        parent::__construct();
        $this->_base=$h+$h-1;
        $this->_altura=$h;
        $this->CalcularDatos();
    }
    public function CalcularDatos()
    {
        $this->_perimetro=$this->_base+sqrt(pow($this->_base/2,2)+pow($this->_altura,2))*2;
        $this->_superficie=($this->_altura*$this->_base)/2;
    }
    public function Dibujar()
    {
        $retorno="<div style='color:".$this->GetColor()."'>";
        if($this->_base%2==0)
        {
            $max=$this->_base/2;
        }
        else
        {
            $max=$this->_base/2 +0.5;
        }
        $min=$max;

        for($i=1;$i<=$this->_altura;$i++)
        {
            for($j=1;$j<=$this->_altura - $i;$j++)
            {
               $retorno = $retorno." ' ";//utilzo comillas simples por que se representa el espacio en blanco
            }

            for($j=1 ;$j<=2*$i-1 ;$j++){
               $retorno =$retorno.'*';
            }
            $retorno =$retorno.'<br>';
        }
        return($retorno."</div>");
    }
    public function ToString()
    {
        return parent::ToString()."</br> ". $this->Dibujar();
    }
}



?>