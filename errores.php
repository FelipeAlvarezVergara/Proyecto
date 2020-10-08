<?php

    require "admin/config.php";
    include 'subire.php';

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Subir Errores</title>
  <link rel="stylesheet" href="css/upload.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript">
        $(document).ready(function(){
            $('.boton').mouseover(function(){
                $('audio')[0].play();
            });
        });
  </script>
</script>
</head>
<body>
      <div class="container">
          <div class="row">
              <form action="errores.php" method="post" enctype="multipart/form-data">
                    <h3>Subir Errores</h3>
                    <input type="file" name="archivos">
                    <button type="submit" name="save">Subir</button>
                    <button type="submit" class="boton" name="alarm">Alarma</button>
              </form>
          </div>
      </div>
<audio preload>
    <source src="sonido/beep.mp3" type="audio/mp3">
    <source src="sonido/beep.ogg" type="audio/ogg">
</audio>
</body>
</html>
