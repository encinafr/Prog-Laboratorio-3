<?php


$fp = fopen("Files/miArchivo.txt","a");
$hora = date('l jS \of F Y h:i:s A');

 $ok = fwrite($fp,"Hola soy Javier Encina $hora \n");

 if($ok >0)
 {
    echo("Escritura exitosa");
 }

fclose($fp);


?>