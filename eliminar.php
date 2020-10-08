<?php
// Se usa el comando "unlink" para borrar el archivo
unlink($_GET["name"]);

// Redireccion hacia atras
header("Location: " . $_SERVER["HTTP_REFERER"])
?>
