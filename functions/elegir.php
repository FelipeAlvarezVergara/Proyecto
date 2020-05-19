<?php

  /*  require 'database.php';


    if (isset($_POST['roles'])) {

        $rol = rand(0,1);

        if ($rol == '1') {
          header('Location: '.RUTA.'supervisor.php');
        } else {
          header('Location: '.RUTA.'programador.php');
        }
    }*/

    if (isset($_POST['Programador'])) {
        header('Location: '.RUTA.'programador.php');
    } else if (isset($_POST['Supervisor'])) {
        header('Location: '.RUTA.'supervisor.php');
    }

 ?>
