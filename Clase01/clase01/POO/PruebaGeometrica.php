<?php
    require_once "FiguraGeometrica.php";
    require_once "Triangulo.php";
    require_once "Rectangulo.php";

    $rectangulo=new Rectangulo(3,8);
    $rectangulo->SetColor("green");
    echo $rectangulo->ToString();
    $triangulo=new Triangulo(10);
   echo($triangulo->ToString());

?>