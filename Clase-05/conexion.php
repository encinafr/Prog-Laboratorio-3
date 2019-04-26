<?php
$user = 'root';
$password = "";
try{
    $obj = new PDO("mysql:host=localhost;dbname=cdcol;",$user,$password);
    $objquery = $obj->query("SELECT * FROM CDS;");

    $obj2 = $objquery->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
  
    var_dump($obj2);
    echo "Conexion Establecida";
}catch(PDOException $e){
    echo "error";
}

