<?php
    session_start();
    require 'admin/config.php';
    unset($_SESSION['consulta']);
 ?>
 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <title>Grupos</title>
     <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="js/select2/css/select2.css">
     <link rel="stylesheet" href="css/font-awesome.css">

     <script src="js/jquery-3.5.1.min.js"></script>
     <script src="js/bootstrap/js/bootstrap.js"></script>
     <script src="js/select2/js/select2.js"></script>
   </head>
   <body>

     <div class="container">
         <div id="buscador"></div>
         <div id="tabla"></div>
     </div>

   </body>
 </html>

 <script type="text/javascript">
       $(document).ready(function(){
           $('#tabla').load('views/grupos.view.php');
           $('#buscador').load('buscarg.php');
       });
 </script>
