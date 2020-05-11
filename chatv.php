<?php

require 'admin/config.php';
require "functions/db.php";
require 'functions/actualizarc.php';

 ?>
<!DOCTYPE html>
 <html lang="es">
 <head>
   <meta charset="UTF-8">
   <title>CHAT</title>
   <link rel="stylesheet" href="css/chat.css">
   <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani&display=swap" rel="stylesheet">
   <script type="text/javascript">
         //activar la funcion de ajax para el chat
         function ajax() {
            var req = new XMLHttpRequest();

            req.onreadystatechange = function(){
                  if (req.readyState == 4 && req.status == 200) {
                      document.getElementById('chat').innerHTML = req.responseText;
                  }
            }

            req.open('GET', 'chat.php', true);
            req.send();
         }
         //Refresco de pagina cada segundo
         setInterval(function(){ajax();}, 1000);
   </script>
 </head>
 <body onload="ajax();">
     <div id="contenedor">
         <div id="caja-chat">
             <div id="chat"></div>
         </div>

         <form method="POST" action="chatv.php">
               <input type="text" name="nombre" placeholder="Ingresa tu nombre">
               <textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
               <input type="submit" name="enviar" value="Enviar">
               <input type="submit" name="resetiar" value="Reseteo Chat">
         </form>

         <?php

           if (isset($_POST['enviar'])) {

             $nombre = $_POST['nombre'];
             $mensaje = $_POST['mensaje'];

             $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";

             $ejecutar = $conn->query($consulta);
             
           }
          ?>
     </div>
 </body>
 </html>
