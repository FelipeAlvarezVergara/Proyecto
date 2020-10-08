	<?php

    require 'admin/config.php';
    require 'functions/condb.php';

    if (isset($_POST['confirmar'])) {
      if (is_array($_POST['id'])) {
				$arrayc = count($_POST['id']);
					for($i=0;$i<$arrayc;$i++){
						$estado = $_POST['estado'][$i];
						$id = $_POST['id'][$i];
						$sql = "UPDATE grupos SET chequeo=\"$estado\" WHERE id = '$id'";
						$stat = mysqli_query($conn, $sql);
				}
      }
    }

 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Chequeo De Actividades</title>
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
                    <h2>Grupos</h2>
                    <form id="form" action="checkact.php" method="post">
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
                              <td>
																<select name="estado[]" id="estado">
																	<option value="Terminadas" <?php if($row['chequeo']=="Terminadas"):?>selected<?php endif;?> >Terminadas</option>
																	<option value="Incompletas" <?php if($row['chequeo']=="Incompletas"):?>selected<?php endif;?> >Incompletas</option>
																	<option value="No Realizadas" <?php if($row['chequeo']=="No Realizadas"):?>selected<?php endif;?> >No Realizadas</option>
																</select>
                              </td>
                              <td><input type="hidden" name="id[]" value="<?= $row['id'] ?>"></td>
                            </tr>

                            <?php }
                            }
                           ?>
                      </table>
                        <input type="submit" class="btn btn-primary" name="confirmar" value="Confirmar">
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
