<?php session_start();

require 'admin/config.php';
require 'functions/functions.php';

//comprobacion de la session
if (!isset($_SESSION['usuario'])) {
    header('Location: '.RUTA.'login.php');
}

$alumno = iniciarSession('usuarios', $conexion);

if ($alumno['tipo_usuario'] == "alumno") {
  require 'views/alumno.view.php';
} else {
  header('Location: '.RUTA.'validar.php');
}
 ?>
