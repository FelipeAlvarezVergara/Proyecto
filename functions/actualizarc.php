<?php

  require 'db.php';

  if (isset($_POST['resetiar'])) {
      $datos = "DELETE FROM chat ORDER BY nombre LIMIT 50";

      $query = mysqli_query($conn,$datos);
      
      header('Location: '.RUTA.'chatv.php');
  }
 ?>
