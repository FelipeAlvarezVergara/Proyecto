<?php

      $conn = mysqli_connect("localhost","root","","archivo");

      if(!$conn){

      die("No hay conexion: ".mysqli_connect_error());

      }

    //subir los archivos que se subieron en la pagina web
    if(isset($_POST['save'])) {

       $filename = $_FILES['archivos']['name'];

       $destination = 'subidas/'.$filename;

       $extension = pathinfo($filename,PATHINFO_EXTENSION);

       $file = $_FILES['archivos']['tmp_name'];

       $size = $_FILES['archivos']['size'];

     //verificando el tipo de extension que se tiene que subir en la pagina y el tamaño de este con el limite para subirlo
     if(!in_array($extension,['zip', 'pdf', 'rar', 'png', 'jpg', 'docx','doc'])) {
             echo "Tu extension de archivo deben ser .zip, .pdf, .rar, .png, .jpg, .doc, .docx";
     } elseif($_FILES['archivos']['size'] > 1000000) {
             echo "El archivo es demasiado grande";
     } else {
         //guardando los archivos en la BD
         if(move_uploaded_file($file,$destination)) {

               $sql = "INSERT INTO archivos (nombre,tamaño,descargas) VALUES ('$filename','$size',0)";

               if(mysqli_query($conn,$sql)) {
                     echo "Los archivos se subieron sactisfactoriamente";
               } else {
                   echo "No se subieron los archivos";
               }
         }
     }
   }

 ?>
