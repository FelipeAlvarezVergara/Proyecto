<?php

    require "functions/db.php";

    // se consulta a la base
    $consulta = "SELECT * FROM chat ORDER BY id DESC";
    $ejecutar = $conn->query($consulta);
    while($fila = $ejecutar->fetch_array()) :

    

  ?>

       <div id="datos-chat">
          <span style="color: #1C62C4;"><?php echo $fila['nombre']; ?></span>
          <span style="color: #848484;"><?php echo $fila['mensaje']; ?></span>
       </div>

 <?php endwhile; ?>
