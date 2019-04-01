<?php


$fp = fopen("Files/miArchivo.txt","w");

 $ok = fwrite($fp,"Hola soy Javier Encina mLopez");

 if($ok >0)
 {
    echo("Escritura exitosa");
 }

fclose($fp);


?>