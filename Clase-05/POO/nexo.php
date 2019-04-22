<?php

include_once ("AccesoDatos.php");
include_once ("cd.php");
include_once ("Usuario.php");

$op = isset($_POST['op']) ? $_POST['op'] : NULL;

switch ($op) {
    case 'accesoDatos':
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        
        $consulta = $objetoAccesoDato->RetornarConsulta("select id,correo,clave,nombre,apellido,email"
                                                        ."FROM usuarios");

        $consulta->execute();
        $user = new Usuario();

        $consulta->setFetchMode(PDO::FETCH_INTO, $user);
         var_dump($consulta);
        foreach ($consulta as $user){
            print_r($user->Mostrar());
            print("
                    ");
        }

        break;
 
    case 'mostrarTodos':

        $usuarios = Usuario::TraerTodosLosUsuarios();
        var_dump($usuarios);

        foreach ($usuarios as $usuario) {
            
            print_r($usuario->Mostrar());
            print("
                    ");
        }
    
        break;

    case 'insertarUsuario':
    
        $usuario = new Usuario();
        $usuario->id = 66;
        $usuario->nombre = "Un usuario";
        $usuario->apellido = "Un apellido";
        
        $usuario->InsertarElUsuario();

        echo "ok";
        
        break;

    case 'modificarUsuario':
        $id = $_POST['id'];        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
    
        echo cd::ModificarUsuario($id, $nombre, $apellido, $correo);
            
        break;

    case 'eliminarUsuario':
    
        $miCD = new Usuatio();
        $miCD->id = 66;
        
        $miCD->EliminarCD($miCD);

        echo "ok";
        
        break;
        
        
    default:
        echo ":(";
        break;
}
