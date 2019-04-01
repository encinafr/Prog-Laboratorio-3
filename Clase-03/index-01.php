<?php
$fp =fopen("Files/miArchivo.txt","r");

$file = fread($fp,filesize("Files/miArchivo.txt"));//fgets lee todo

echo("<h1>$file</h1>");

fclose($fp);


?>