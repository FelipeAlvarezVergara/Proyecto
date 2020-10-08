<?php
      session_start();
      require_once "../functions/dbgrupos.php";
      $conn = conexion();

 ?>

<div class="row">
    <div class="col-sm-12">
      <h2>Tabla De Grupos</h2>
        <table class="table table-hover table-borderer table-condensed">
            <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Grupo</th>
              </tr>
            </thead>

              <?php

                  if (isset($_SESSION['consulta'])) {
                      if ($_SESSION['consulta'] > 0) {
                          $idp = $_SESSION['consulta'];
                          $sql = "SELECT id, nombre, apellidos, grupo, rol FROM grupos WHERE id = '$idp' ORDER BY grupo ASC";
                      } else {
                          $sql = "SELECT id, nombre, apellidos, grupo, rol FROM grupos ORDER BY grupo ASC";
                      }
                  } else {
                      $sql = "SELECT id, nombre, apellidos, grupo, rol FROM grupos ORDER BY grupo ASC";
                  }
                  $query = mysqli_query($conn, $sql);
                  while ($ver=mysqli_fetch_row($query)) {

               ?>
            <thead>
             <tbody>
              <tr>
                  <td><?php echo $ver[1] ?></td>
                  <td><?php echo $ver[2] ?></td>
                  <td><?php echo $ver[3] ?></td>
              </tr>
             </tbody>
            </thead>
              <?php
                }
               ?>
        </table>
    </div>
</div>
