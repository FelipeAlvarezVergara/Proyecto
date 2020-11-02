<?php

    include 'conexion.php';

    if (!isset($_POST['grupos'])) {
        $_POST['grupos'] = "";
        $chequeo = $_POST['grupos'];
    }

        $chequeo = $_POST['grupos'];
        if (!empty($chequeo) && $chequeo != "") {
            $sql = "SELECT * FROM alumno WHERE grupo LIKE '%".$chequeo."%' ORDER BY apellidos ASC";
            $query = mysqli_query($conn, $sql);
        }


 ?>
