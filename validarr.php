<?php

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];

    $conn = mysqli_connect("localhost", "root", "", "grupos");
    $sql = "SELECT * FROM grupos WHERE nombre = '$nombre' AND apellidos = '$apellidos' ORDER BY nombre ASC";
    $resultado = mysqli_query($conn, $sql);

    $filas = mysqli_num_rows($resultado);

    if ($filas == 'Supervisor') {
        header('Location: supervisor.php');
    } elseif ($filas == 'Programador') {
        header('Location: programador.php');
    } else {
        header('Location: confirmacion.php');
    }

 ?>
