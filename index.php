<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>BIENVENIDO</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.5.0.js"></script>
    <script src="js/main.js"></script>
  </head>
  <body>
    <header>
          <span id="button-menu" class="fa fa-bars"></span>
          <nav class="navegacion">
            <ul class="menu">
              <!--TITULAR-->
              <li class="title-menu">Todas las categorias</li>
              <!--TITULAR-->

              <li><a href="Index.php"><span class="fa fa-home icon-menu"></span>Inicio</a></li>

              <li class="item-submenu" menu="1">
                <a href="#"><span class="fa fa-user icon-menu"></span>Profesor</a>
                <ul class="submenu">
                  <li class="title-menu"><span class="fa fa-user icon-menu">Profesor</li>
                  <li class="go-back">Atras</li>

                  <li><a href="login.php">Iniciar</a></li>
                  <li><a href="registro.php">Registrarse</a></li>
                </ul>
              </li>
              <li class="item-submenu" menu="2">
                <a href="#"><span class="fa fa-user icon-menu"></span>Alumno</a>
                <ul class="submenu">
                  <li class="title-menu"><span class="fa fa-user icon-menu">Alumno</li>
                  <li class="go-back">Atras</li>

                  <li><a href="login.php">Iniciar</a></li>
                  <li><a href="registro.php">Registrarse</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </header>
  </body>
</html>
