<?php

      require_once 'dbgrupos.php';
      $conn = conexion();

      $id = $_POST['id'];
      $grupo = $_POST['grupo'];

      $sql = "UPDATE grupos SET grupo='$grupo' WHERE id='$id'";

      echo $query = mysqli_query($conn, $sql);

 ?>
