<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bienvenido Alumno</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
      <header>
          <input type="checkbox" id="btn-menu">
          <label for="btn-menu"><img src="img/menu.png" alt=""></label>
          <div class="menu">
            <ul>
              <!--<li><a href="descargaal.php" target="_blank">Actividad</a></li>-->
              <li><a href="cronometro.html" target="_blank">Tiempo Actividad</a></li>
              <li><a href="actividadesal.php" target="_blank">Enviar Actividad</a></li>
              <!--<li><a href="descargare.php">Actividades Enviadas</a></li>-->
              <li><a href="errores.php" target="_blank">Enviar Error</a></li>
              <li><a href="roles.php" target="_blank">Roles</a></li>
              <li><a href="reportes.php" target="_blank">Reportes Enviados</a></li>
              <li><a href="chatv.php" target="_blank">Chat</a></li>
              <li><a href="<?php echo RUTA.'close.php' ?>">Cerrar Sesion</a></li>
            </ul>
          </div>
      </header>
</body>
</html>
