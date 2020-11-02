<?php

    require 'functions/conexion.php';


 ?>

 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <title>Grupos</title>
     <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="js/select2/css/select2.css">
     <link rel="stylesheet" href="css/font-awesome.css">

     <script src="js/jquery-3.5.1.min.js"></script>
     <script src="js/bootstrap/js/bootstrap.js"></script>

   </head>
   <body>
      <div class="container">
        <div id="buscador"></div>
        <div id="tabla">
          <div class="row">
            <div class="col-sm-12">
              <h2>Tabla De Grupos</h2>
              <form id="form" action="grupos.php" method="post">
                <b>
                </b>
                <label>RUT</label>
                <input type="text" name="rut" id="rut" maxlength="12" placeholder="Ingresar su RUT" class="input-100">
                <script type="text/javascript">
                      document.getElementById('rut').addEventListener('input', function(evt) {
                      let value = this.value.replace(/\./g, '').replace('-', '');

                      if (value.match(/^(\d{2})(\d{3}){2}(\w{1})$/)) {
                      value = value.replace(/^(\d{2})(\d{3})(\d{3})(\w{1})$/, '$1.$2.$3-$4');
                      }
                      else if (value.match(/^(\d)(\d{3}){2}(\w{0,1})$/)) {
                      value = value.replace(/^(\d)(\d{3})(\d{3})(\w{0,1})$/, '$1.$2.$3-$4');
                      }
                      else if (value.match(/^(\d)(\d{3})(\d{0,2})$/)) {
                      value = value.replace(/^(\d)(\d{3})(\d{0,2})$/, '$1.$2.$3');
                      }
                      else if (value.match(/^(\d)(\d{0,2})$/)) {
                      value = value.replace(/^(\d)(\d{0,2})$/, '$1.$2');
                      }
                      this.value = value;
                    });
                </script>
                <input type="submit" name="buscar" value="Buscar">
                <table class="table table-hover table-condensed table-borderer">
                      <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>RUT</th>
                        <th>Grupo</th>
                      </tr>

                    <?php

                      include 'functions/congrupo.php';
                      if (isset($query)) {
                        while($row= mysqli_fetch_array($query)){

                     ?>

                      <tr>
                          <td><?= $row['nombre'] ?></td>
                          <td><?= $row['apellidos'] ?></td>
                          <td><?= $row['rut'] ?></td>
                          <td><?= $row['grupo'] ?></td>
                      </tr>

                  <?php }
                  }
                  ?>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
   </body>
 </html>
