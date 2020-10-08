<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Bienvenido Profesor</title>
    <link rel="stylesheet" href="css/menupr.css">
    <link rel="stylesheet" href="css/font-awesome.css">
  </head>
  <body>
      <div class="menu" id="menu">
          <ul>
              <li id="item"><a href="profesor.php"><span class="fa fa-home icon-menu"></span>Inicio</a></li>
              <li id="item"><a href="buscador.php" target="carga"><span class="fa fa-address-book"></span>Cursos</a></li>
              <li id="item"><a href="tablag.php" target="carga"><span class="fa fa-users"></span>Registro Grupos</a>
              </li>
              <li id="item"><a href=""><span class="fa fa-pencil-square-o"></span>Actividades</a>
                  <ul id="desple">
                      <li><a href="https://techiedelight.com/compiler/" target="carga"><span class="fa fa-eye"></span>IDE ONLINE</a></li>
                      <li><a href="actividades.php" target="carga"><span class="fa fa-upload"></span>Subir Actividad Curso</a></li>
                      <li><a href="subidaspf.php" target="carga"><span class="fa fa-bookmark"></span>Actividades Subidas</a></li>
                      <li><a href="descargasub.php" target="carga"><span class="fa fa-share-square"></span>Actividades Subidas Alumno</a></li>
                      <li><a href="checkact.php" target="carga"><span class="fa fa-check-square-o"></span>Chequeo Actividades</a></li>
                      <li><a href="registroact.php" target="carga"><span class="fa fa-check"></span>Registro Actividades Realizadas</a></li>
                      <li><a href="reportesp.php" target="carga"><span class="fa fa-flag"></span>Reportes Alumno Supervisor</a></li>
                      <li><a href="descargarep.php" target="carga"><span class="fa fa-exclamation-triangle"></span>Errores</a></li>
                  </ul>
              </li>
              <li id="item"><a href="chatv.php" target="carga"><span class="fa fa-comments"></span>Chat</a></li>
              <li id="item"><a href="<?php echo RUTA.'close.php' ?>"><span class="fa fa-sign-out"></span>Cerrar Sesion</a></li>
          </ul>
      </div>
    <iframe width="100%" height="1080" frameborder="0" name="carga"></iframe>
    <script src="js/scroll.js"></script>
  </body>
</html>
