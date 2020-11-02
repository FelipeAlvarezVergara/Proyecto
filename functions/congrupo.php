<?php

    include 'functions/conexion.php';

    if(!isset($_POST['rut'])){

      $_POST['rut'] = "";

      $buscarr = $_POST['rut'];

    }
    $buscarr = $_POST['rut'];
    if (!empty($buscarr) && $buscarr != "") {
      $sql = "SELECT * FROM alumno WHERE rut LIKE '%".$buscarr."%' ORDER BY grupo ASC";
      $query= mysqli_query($conn,$sql);
    }


 ?>
