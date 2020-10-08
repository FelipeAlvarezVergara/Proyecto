<?php

  $conn = mysqli_connect("localhost", "root", "", "grupos");

  if(!$conn){
      die("No hay conexion: ".mysqli_connect_error());
  }


 ?>
