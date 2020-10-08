<?php

      require_once 'dbgrupos.php';
      $conn = conexion();

      $id = $_POST['id'];
      $rol = $_POST['rol'];

      $sql = "UPDATE grupos SET rol='$rol' WHERE id='$id'";

      echo $query = mysqli_query($conn, $sql);

 ?>
