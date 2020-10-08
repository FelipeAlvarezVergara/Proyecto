<?php

      require_once "../functions/dbgrupos.php";
      $conn = conexion();

 ?>

<div class="row">
    <div class="col-sm-12">
      <h2>Tabla Registro De Grupos</h2>
        <table class="table table-hover table-condensed table-borderer">
        <caption>
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                Agregar
                <span class="fa fa-plus"></span>
              </button>
        </caption>
              <tr>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Grupo</th>
                  <th>Rol</th>
                  <th>Editar Grupo</th>
                  <th>Editar Rol</th>
                  <th>Eliminar</th>
              </tr>

              <?php

                  $sql = "SELECT id, nombre, apellidos, grupo, rol FROM grupos ORDER BY grupo ASC";

                  $query = mysqli_query($conn, $sql);
                  while ($ver=mysqli_fetch_row($query)) {

                  $datos = $ver[0]."||".
                           $ver[1]."||".
                           $ver[2]."||".
                           $ver[3]."||".
                           $ver[4];
               ?>

              <tr>
                  <td><?php echo $ver[1] ?></td>
                  <td><?php echo $ver[2] ?></td>
                  <td><?php echo $ver[3] ?></td>
                  <td><?php echo $ver[4] ?></td>
                  <td>
                      <button class="btn btn-warning fa fa-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformg('<?php echo $datos ?>')"></button>
                  </td>
                  <td>
                      <button class="btn btn-warning fa fa-pencil" data-toggle="modal" data-target="#modalRol" onclick="agregaformr('<?php echo $datos ?>')"></button>
                  </td>
                  <td>
                      <button class="btn btn-danger fa fa-times" onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
                      </button>
                  </td>
              </tr>
              <?php
                }
               ?>
        </table>
    </div>
</div>
