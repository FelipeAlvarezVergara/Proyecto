<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Bienvenido Alumno</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/font-awesome.css">
  </head>
  <body>
      <div class="menu" id="menu">
          <ul>
              <li id="item"><a href="alumno.php"><span class="fa fa-home icon-menu"></span>Inicio</a></li>
              <li id="item"><a href="alumnore.php" target="carga"><span class="fa fa-user-plus"></span>Registro</a></li>
              <li id="item"><a href=""><span class="fa fa-pencil-square-o"></span>Actividades</a>
                  <ul id="desple">
                      <li><a href="descargas.php" target="carga"><span class="fa fa-share-square"></span>Actividades Subidas Profesor</a></li>
                      <li><a href="grupos.php" target="carga"><span class="fa fa-users"></span>Grupos</a></li>
                      <li><a href="cronometro.html" target="carga"><span class="fa fa-clock-o"></span>Tiempo</a></li>
                      <li><a href="actividadesal.php" target="carga"><span class="fa fa-share-square"></span>Subir Respuesta Actividad</a></li>
                      <li><a href="subalact.php" target="carga"><span class="fa fa-upload"></span>Actividades Enviadas</a></li>
                      <li><a href="errores.php" target="carga"><span class="fa fa-share-square"></span>Enviar Error</a></li>
                      <li><a href="erroresub.php" target="carga"><span class="fa fa-exclamation-triangle"></span>Errores Enviados</a></li>
                      <li><a href="reportes.php" target="carga"><span class="fa fa-flag"></span>Reportes Enviados</a></li>
                  </ul>
              </li>
              <li id="item"><a href="confirmacion.php" target="carga"><span class="fa fa-address-card"></span>Roles</a></li>
              <li id="item"><a href="chatv.php" target="carga"><span class="fa fa-comments"></span>Chat</a></li>
              <li id="item"><a href="<?php echo RUTA.'close.php' ?>"><span class="fa fa-sign-out"></span>Cerrar Sesion</a></li>
          </ul>
      </div>
    <iframe width="100%" height="1080" frameborder="0" name="carga"></iframe>
    <script src="js/scroll.js"></script>
  </body>
</html>
