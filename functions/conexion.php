<?php

    $conn = mysqli_connect("localhost","root","","alumnos");

    if(!$conn){
          die("No hay conexion: ".mysqli_connect_error());
    }

 ?>
