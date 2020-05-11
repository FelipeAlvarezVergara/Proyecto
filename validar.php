<?php session_start();

  require 'admin/config.php';
  require 'functions/functions.php';

  //comprobacion de la session
  if (isset($_SESSION['usuario'])) {
    //Validacion de usuarios por privilegio
    $usuario = iniciarSession('usuarios', $conexion);

    if ($usuario['tipo_usuario'] == 'profesor') {
        header('Location: '.RUTA.'profesor.php');
    } else if ($usuario['tipo_usuario'] == 'alumno') {
        header('Location: '.RUTA.'alumno.php');
    } else {
        header('Location: '.RUTA.'login.php');
    }
  } else {
      header('Location: '.RUTA.'login.php');
  }


 ?>
