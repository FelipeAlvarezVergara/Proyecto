<?php

  function conexion(){

    $servidor = "localhost";
    $usuario = "root";
    $pass = "";
    $bd = "grupos";

    $conn = mysqli_connect($servidor, $usuario, $pass, $bd);

    return $conn;
  }

 ?>
