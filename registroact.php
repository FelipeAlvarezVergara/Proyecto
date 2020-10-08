<?php

    require 'admin/config.php';
    require 'functions/condb.php';

 ?>
 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <title>Registro Actividades</title>
     <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="css/font-awesome.css">

     <script src="js/jquery-3.5.1.min.js"></script>
     <script src="js/bootstrap/js/bootstrap.js"></script>

   </head>
   <body>
      <div class="container">
          <div id="tabla">
              <div class="col-sm-12">
                  <h2>Grupos</h2>
                  <form id="form" name="save" action="registroact.php" method="post">
                    <b>
                    </b>
                    <input type="text" name="grupos" placeholder="Ingresar Grupo">
                    <input type="submit" class="btn btn-secondary" value="Buscar Grupo">
                    <table class="table table-hover table-condensed table-borderer">
                        <tr>
                          <th>Nombre</th>
                          <th>Apellidos</th>
                          <th>Rol</th>
                          <th>Estado Actividades</th>
                        </tr>

                        <?php

                        include 'functions/concheck.php';
                        if (isset($query)) {
                          while($row= mysqli_fetch_array($query)) {

                         ?>

                         <tr>
                           <td><?= $row['nombre'] ?></td>
                           <td><?= $row['apellidos'] ?></td>
                           <td><?= $row['rol'] ?></td>
                           <td><?= $row['chequeo'] ?></td>
                         </tr>
                         <?php }
                         }
                        ?>
                    </table>
                  </form>
              </div>
          </div>
      </div>
   </body>
 </html>
