<?php

      require_once 'dbgrupos.php';
      $conn = conexion();

      $id = $_POST['id'];

      $sql = "DELETE FROM grupos WHERE id='$id'";

      echo $query = mysqli_query($conn, $sql);
 ?>
