


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once "Empleado.php";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$sexo = $_POST['sexo'];
// $legajo = $_REQUEST['legajo'];
$sueldo = $_POST['sueldo'];

 $empleado = new Empleado($nombre);
    // $empleado->setName($nombre);
 $empleado->Guardar();

var_dump($_POST['nombre']);


?>
<a href="form.html">Volver</a>
</body>
</html>




