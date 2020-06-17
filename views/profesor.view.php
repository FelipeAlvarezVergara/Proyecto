<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bienvenido Profesor</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
      <header>
          <input type="checkbox" id="btn-menu">
          <label for="btn-menu"><img src="img/menu.png" alt=""></label>
          <nav class="menu">
            <ul>
              <!--<li><a href="actividades.php" target="_blank">Subir Actividad</a></li>-->
              <!--<li><a href="descargara.php" target="_blank">Actividades</a></li>-->
              <li><a href="descargasub.php" target="_blank">Actividades Subidas</a></li>
              <li><a href="reportesp.php" target="_blank">Reportes</a></li>
              <li><a href="descargarep.php" target="_blank">Errores</a></li>
              <li><a href="<?php echo RUTA.'chatv.php' ?>" target="_blank">Chat</a></li>
              <li><a href="<?php echo RUTA.'close.php' ?>">Cerrar Sesion</a></li>
            </ul>
          </nav>
      </header>
</body>
</html>
