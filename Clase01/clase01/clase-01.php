hola mundo

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clase01</title>
</head>
<body>
<?php
    $nombre = "Javier";
    $apeliido = "Encina";

    $x = -3;
    $y = 15;

    $result = $x + $y;
    echo("Hola soy $apeliido y me apellido $nombre <br>");
    echo("el resultado de la suma de $x + $y es $result <br>");

    $par=0;
    $cont=0;
    for($i=0;$i<=1000;$i++)
    {
        if($i%2==0)
        {
            $par+=$i;
            $cont++;
            if($par>1000)
            break;
            
        }
        // echo($par);
    }
    echo("Se sumaron $cont y la suma es $par <br>");
    
    $a=5;
    $b=1;
    $c=5;

    if($a>$b & $a<$c)
    {
        echo("el del medio es $a<br>");
    }
    else
    {
        if($b>$a & $b<$c)
        {
            echo("el del medio es $b<br>");
        }else{
            echo("el del medio es $c<br>");
        }
    }




    $fecha = date('l jS \of F Y h:i:s A');
    echo($fecha);

    switch($fecha)
    {
      case 'Monday 18th of March 2019 03:09:35 PM':
       echo("Es otoño");
       break;
    }
     
        $array = array(
            "a" => rand(1,20),
            "b" => rand(1,20),
            "c" => rand(1,20),
            "d" => rand(1,20),
            "e" => rand(1,20),
        );
        var_dump($array);
?>
    
</body>
</html>
