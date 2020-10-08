<?php

    include 'condb.php';

    if (!isset($_POST['nombre']) && !isset($_POST['apellidos'])){

       $_POST['nombre'] = "";
       $_POST['apellidos'] = "";
       $buscar = $_POST['nombre'];
       $buscara = $_POST['apellidos'];

    }
       $buscar = $_POST['nombre'];
       $buscara = $_POST['apellidos'];
       if (!empty($buscar) && $buscar!="" && !empty($buscara) && $buscara!="") {
           $sql = "SELECT * FROM grupos WHERE nombre LIKE '%".$buscar."%' AND apellidos LIKE '%".$buscara."%' ORDER BY apellidos ASC";
           $query = mysqli_query($conn, $sql);
       }

 ?>
