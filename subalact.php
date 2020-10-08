<?php

    require 'admin/config.php';
    require 'subiral.php';

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Errores</title>

  <!-- Compilador y CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

  <!-- Tema opcional -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <!-- compilador javascript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
  <style>
    .navbar {
        position: relative;
        min-height: 50px;
        margin-bottom: 5px;
    }
  </style>
</head>
<body>
<div class="navigation" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
      <div class="nav-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="#" class="navbar-brand">Actividades Enviadas</a>
      </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    <!--/nav.collapse-->
  </div>
</div>
  <div class="container">
  <!--Tabla Descarga-->
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Archivos</h3>
          </div>
          <div class="panel-body">

      <table class="table">
          <thead>
              <tr>
                  <th width="7%">#</th>
                  <th width="70%">Nombre</th>
                  <th width="13%">Descargar</th>
                  <th width="10%">Eliminar</th>
              </tr>
          </thead>
          <tbody>
            <?php
              $archivos = scandir("subidasal");
              $num=0;
              for ($i=2; $i<count($archivos); $i++)
              {$num++;
            ?>
            <p>
              </p>

                  <tr>
                      <th scope="row"><?php echo $num; ?></th>
                      <td><?php echo $archivos[$i]; ?></td>
                      <td><a title="Descargar Archivo" href="subidasal/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
                      <td><a title="Eliminar Archivo" href="eliminar.php?name=subidasal/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
                  </tr>
              <?php }?>

          </tbody>
      </table>
            </div>
          </div>
          <!--Final de la tabla-->
        </div>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</body>
</html>
