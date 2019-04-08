<?php
    require_once "Empleado.php";

    // var_dump($_FILES);echo("<br>");
    // var_dump($_POST);

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $legajo = $_POST['legajo'];
    $sueldo = $_POST['sueldo'];
    $foto = $_FILES['foto'];
    $destino = "Fotos-empleados/".$legajo.'_'.$apellido.'.'.pathinfo($foto['name'],PATHINFO_EXTENSION);
    move_uploaded_file($foto['tmp_name'],$destino);


    $empleado = new Empleado($legajo,$nombre,$apellido,$sueldo,$destino);//$foto['name']
    Empleado::Agregar($empleado);
    // var_dump(Empleado::TraerTodos());
    $EmpleadosObtenidos = Empleado::TraerTodos();
    foreach ( $EmpleadosObtenidos as $empleado ) {
         
            echo($empleado->Nombre);
            echo('<img src="".$empleado->Path_foto" width="100px" heigth="100px" />');
            
    }

    
?>