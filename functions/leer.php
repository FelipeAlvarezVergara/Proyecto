<?php

      include 'conexion.php';

      if (!isset($_POST['cursos'])) {

        $_POST['cursos']="";

        $buscar = $_POST['cursos'];

      }
      $buscar = $_POST['cursos'];
      if (!empty($buscar) && $buscar != ""){
            $sql = "SELECT * FROM alumno WHERE curso LIKE '%".$buscar."%' ORDER BY nombre ASC";
            $query= mysqli_query($conn,$sql);
      }
 ?>
