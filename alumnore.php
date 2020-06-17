<?php

  require 'admin/config.php';
  require 'functions/basealumnos.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = limpiarDatos($_POST['nombre']);
    $apellidos = limpiarDatos($_POST['apellidos']);
    $rut = limpiarDatos($_POST['rut']);
    $cursos = limpiarDatos($_POST['cursos']);

    $sql = "SELECT * FROM alumno WHERE nombre = '$nombre' AND apellidos = '$apellidos' AND rut = '$rut' AND curso = '$cursos'";
    $resultado = mysqli_query($conn, $sql);

  if (empty($nombre) || empty($apellidos) || empty($rut) || empty($cursos)) {
      echo "Ingresar todos los datos";
  } else {
      if (!empty($resultado) AND mysqli_num_rows($resultado) > 0) {
         echo "El curso ya esta ingresado";
      } else {
        $query="INSERT INTO alumno(ida, nombre, apellidos, rut, curso) VALUES (null, '$nombre','$apellidos','$rut','$cursos')";
        if (mysqli_query($conn, $query)) {
            echo "Datos ingresados correctamente";
        }else {
            echo "Error al ingresar los datos";
        }
      }
    }
  }

  require 'views/alumnore.view.php';

 ?>
