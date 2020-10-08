<?php session_start();

  require 'admin/config.php';
  require 'functions/functions.php';

  //comprobacion de la session
  if (!isset($_SESSION['usuario'])) {
      header('Location: '.RUTA.'login.php');
  }

  $profesor = iniciarSession('usuarios', $conexion);

  if ($profesor['tipo_usuario'] == "profesor") {
    require 'views/profesor.view.php';
  } else {
    header('Location: '.RUTA.'validar.php');
  }

 ?>
