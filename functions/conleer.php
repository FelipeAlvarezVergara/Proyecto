<?php

    include 'conexion.php';

    if (!isset($_POST['rut'])){

       $_POST['rut'] = "";
       $buscar = $_POST['rut'];

    }
       $buscar = $_POST['rut'];
       if (!empty($buscar) && $buscar!="") {
           $sql = "SELECT * FROM alumno WHERE rut LIKE '%".$buscar."%' ORDER BY apellidos ASC";
           $query = mysqli_query($conn, $sql);
       }

 ?>
