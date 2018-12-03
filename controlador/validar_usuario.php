<?php
	require_once '../modelos/usuario.php';
    session_start();
    $datos = $_SESSION['correos'];
    
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $id = 0;
    $validador = false;

    foreach($datos as $row){
        if($row['USUARIO']== $email & $row['PASS']== $pass)
        {
            $validador = true;
            $id = $row['ID_USUARIO'];
        }
    }

    if($validador)
    {
        $usuario = new Usuario();
        $usuario->setId($id);
        $activo = $usuario->activo(); //selecciona todos los datos del ususario activo

        $_SESSION['usuario_activo'] = $activo; //sesion con los datos del ususario activo id_usuario, nombre apellido, id_area

      
        header('location: cargar_sesion.php');
    }
    else 
    {
        $_SESSION['error'] = "Contraseña incorrecta, favor ingrese nuevamente";
        header("location: ../vista/error.php");
    }

?>