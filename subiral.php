<?php

    $ftp_server = "127.0.0.1";
    $ftp_user = "root";
    $ftp_pass = "";
    $con_id = ftp_connect($ftp_server);
    $lr = ftp_login($con_id, $ftp_user, $ftp_pass);

    if ((!$con_id) || (!$lr)) {
        echo "Error al conectar"; die;
    } else {

        if(isset($_POST['save'])) {

        $temp = explode(".", $_FILES['archivo']['name']);
        $source_file = $_FILES['archivo']['tmp_name'];
        $destino = 'Prototipo/subidasal';
        $nombre = $_FILES["archivo"]['name'];

        ftp_pasv($con_id, true);

        $subio = ftp_put($con_id,
                        $destino.'/'.$nombre,
                        $source_file,
                        FTP_BINARY);

        if ($subio) {
            echo "Archivo Subido...";
        } elseif ($_FILES['archivos']['size'] > 1000000) {
            echo "El archivo es demasiado grande";
        }
        else {
            echo "Error al subir el archivo";
        }
    }
  }
    ftp_close($con_id);
 ?>
