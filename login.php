<?php session_start();

require 'admin/config.php';
require 'functions/functions.php';

$errores = '';

//Diciendole al servidor que el metodo utilizado es POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);
    $password = hash('sha512', $password); //encriptacion de la password en BD para seguridad

    //llamado de los datos en tabla usuarios de la BD
    $statement = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password");
    $statement->execute([
      ':usuario' => $usuario,
      ':password' => $password
    ]);
    $resultado = $statement->fetch();

    if ($resultado != false) {
        $_SESSION['usuario'] = $usuario;
        header('Location: '.RUTA.'validar.php');
    } else {
      $errores = '<li class="error">El usuario y/o contraseña son incorrectos</li>';
    }
}

require 'views/login.view.php';

?>
