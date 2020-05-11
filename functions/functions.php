<?php
  //Conexion a BD
  try {
     //Estructura PDO para conectar a base de datos
     $conexion = new PDO('mysql:host=localhost;dbname=login_curso','root','');
     return $conexion;
  } catch (PDOException $e) {
     return false;
  }

//Funcion para limpar los datos cuando se tratan de agregar caracteres tipo ! o > en el nombre
function limpiarDatos($datos){
  $datos = trim($datos);
  $datos = htmlspecialchars($datos);
  $datos = filter_var($datos, FILTER_SANITIZE_STRING);

  return $datos;
}

//Funcion para que se realice la validacion de los usuarios al ingresar
function iniciarSession($table, $conexion){
  $statement= $conexion->prepare("SELECT * FROM $table WHERE usuario = :usuario");
  $statement->execute([
    ':usuario' => $_SESSION['usuario']
  ]);
  return $statement->fetch(PDO::FETCH_ASSOC);
}


 ?>
