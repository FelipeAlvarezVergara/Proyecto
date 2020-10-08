<?php

    require "admin/config.php";
    include 'subiral.php';

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Subir Actividades</title>
  <link rel="stylesheet" href="css/upload.css">
</head>
<body>
      <div class="container">
          <div class="row">
              <form action="actividadesal.php" method="post" enctype="multipart/form-data">
                    <h3>Subir Archivos</h3>
                    <input type="file" name="archivos">
                    <button type="submit" name="save">Subir</button>
              </form>
          </div>
      </div>
</body>
</html>
