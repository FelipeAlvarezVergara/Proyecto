<?php

    require 'database.php';


    if (isset($_POST['roles'])) {

        $rol = rand(0,1);

        if ($rol == '1') {
          header('Location: '.RUTA.'supervisor.php');
        } else {
          header('Location: '.RUTA.'programador.php');
        }
    }

 ?>
