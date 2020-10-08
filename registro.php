<?php session_start();

require 'admin/config.php';
require 'functions/functions.php';

  //Diciendole al servidor que el metodo utilizado es POST
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $usuario = limpiarDatos($_POST['usuario']);
      $password = limpiarDatos($_POST['password']);
      $password = hash('sha512', $password); //encriptacion de la password en BD por seguridad
      $rol = $_POST['rol'];

      $errores = '';

      //Validar campos de registro
      if (empty($usuario) || empty($password) || empty($rol)) {
          $errores .= '<li class="error">Por favor rellene los campos</li>';
      } else {
        //Validacion existencia del usuario
        $statement = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password LIMIT 1");
        $statement->execute([
          ':usuario' => $usuario,
          ':password' => $password
        ]);
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $errores .= '<li class="error">Este usuario ya existe</li>';
        }
      }

    if ($errores == '') {
        //Insertando datos a la bd
        $query = "INSERT INTO usuarios (id, usuario, password, tipo_usuario) VALUES (null,:usuario,:password,:tipo_usuario)";
        $statement = $conexion->prepare($query);
        $resultado = $statement->execute(array(':usuario'=>$usuario, ':password'=>$password, ':tipo_usuario'=>$rol));

        header('Location: '.RUTA.'login.php');

    }


  }

require 'views/registro.view.php';

 ?>
