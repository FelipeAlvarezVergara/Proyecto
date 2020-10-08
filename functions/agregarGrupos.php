<?php

      require_once 'dbgrupos.php';
      $conn = conexion();

      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
      $grupo = $_POST['grupo'];
      $rol = $_POST['rol'];

      $sql = "INSERT INTO grupos(nombre, apellidos, grupo, rol) VALUES ('$nombre', '$apellidos', '$grupo', '$rol')";

      echo $query = mysqli_query($conn, $sql);


 ?>
