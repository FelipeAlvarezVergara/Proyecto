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

    $sql1 = "SELECT * FROM alumno WHERE rut = '$rut'";
    $result = mysqli_query($conn, $sql1);

  if (empty($nombre) || empty($apellidos) || empty($rut) || empty($cursos)) {
      echo "Ingresar todos los datos";
  } else {
      if (!empty($resultado) AND mysqli_num_rows($resultado) > 0) {
         echo "El curso ya esta ingresado";
      }else {
        if (!empty($result) AND mysqli_num_rows($result) > 0) {
          echo "El rut ya existe";
        } else {
          $query="INSERT INTO alumno(id, nombre, apellidos, rut, curso) VALUES (null, '$nombre','$apellidos','$rut','$cursos')";
          if (mysqli_query($conn, $query)) {
              echo "Datos ingresados correctamente";
          }else {
              echo "Error al ingresar los datos";
          }
        }
      }
    }
  }

  require 'views/alumnore.view.php';

 ?>
