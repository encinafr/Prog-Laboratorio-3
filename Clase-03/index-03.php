<?php

require_once "Persona.php";
;
  $persona = new Persona();

 $persona->nombre =  $_REQUEST['nombre'];
 $persona->apellido = $_REQUEST['apellido'];

 $persona->Guardar();
 $persona->Leer();
$persona::TraerTodasLasPersonas();
 


?>