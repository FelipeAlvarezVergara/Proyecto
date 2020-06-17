<?php

    $conn = mysqli_connect("localhost","root","","alumnos");

    if(!$conn){
	        die("No hay conexion: ".mysqli_connect_error());
    }

    function limpiarDatos($datos){
      $datos = trim($datos);
      $datos = htmlspecialchars($datos);
      $datos = filter_var($datos, FILTER_SANITIZE_STRING);

      return $datos;
    }

 ?>
