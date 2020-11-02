<?php

    require 'admin/config.php';
    require 'functions/conexion.php';

    if (isset($_POST['save'])) {

      $rut = $_POST['rut'];


      $sql = "SELECT * FROM alumno WHERE rut = '$rut' ORDER BY apellidos ASC";
      $resultado = mysqli_query($conn, $sql);


      $filas = $_POST['rol_1'];


      if ($filas == 'Supervisor') {
          header('Location: supervisor.php');
      } elseif ($filas == 'Programador') {
          header('Location: programador.php');
      } else {
          header('Location: confirmacion.php');
      }
    }

 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>Confirmacion</title>
    <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">

     <script src="js/jquery-3.5.1.min.js"></script>
     <script src="js/bootstrap/js/bootstrap.js"></script>

  </head>
  <body>
    <div class="container">
        <div id="tabla">
          <div class="row">
              <div class="col-sm-12">
                <h2>Roles</h2>
                 <form  id="form1" name="save" action="confirmacion.php" method="post">
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
                   <input type="submit" value="Buscar">
                  <table class="table table-hover table-condensed table-borderer">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Rol</th>
                            <th>Accion</th>
                        </tr>

                        <?php

                            include 'functions/conleer.php';
                            if (isset($query)) {
                            while ($row= mysqli_fetch_array($query)) {

                         ?>

                        <tr>
                            <td><?= $row['nombre'] ?></td>
                            <td><?= $row['apellidos'] ?></td>
                            <td><input type="hidden" name="rol_1" value="<?= $row['rol'] ?>"><?= $row['rol'] ?></input></td>
                            <td>
                              <input type="submit" class="btn btn-success" name="save" value="Confirmar" form="form1">
                            </td>
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
