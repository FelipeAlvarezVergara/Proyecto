<?php

    require 'admin/config.php';
    require 'functions/dbgrupos.php';

 ?>
 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <title>Registrar Grupos</title>
     <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
     <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
     <link rel="stylesheet" href="css/font-awesome.css">

     <script src="js/jquery-3.5.1.min.js"></script>
     <script src="js/funciones.js"></script>
     <script src="js/bootstrap/js/bootstrap.js"></script>
     <script src="js/alertifyjs/alertify.js"></script>

   </head>
   <body>
         <div class="container">
             <div id="tabla"></div>
         </div>

  <!--Modal para registros nuevos-->

<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Alumno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label>Nombre</label>
        <input type="text" name="" value="" id="nombre" class="form-control input-sm">
        <label>Apellidos</label>
        <input type="text" name="" value="" id="apellidos" class="form-control input-sm">
        <label>Grupo</label>
        <input type="text" name="" value="" id="grupo" class="form-control input-sm">
        <label>Rol</label>
        <Select class="form-control input-sm" id="rol">
          <option value="">Rol</option>
          <option value="Supervisor">Supervisor</option>
          <option value="Programador">Programador</option>
        </Select>
        <!--<input type="text" name="" value="" id="rol" class="form-control input-sm">-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
          Agregar
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para actualizacion registros -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Grupo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" hidden="" id="idalumno" name="">
        <label>Grupo</label>
        <input type="text" name="" value="" id="grupou" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">
          Actualizar
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalRol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" hidden="" id="idalumno" name="" value="">
        <label>Rol</label>
        <Select class="form-control input-sm" id="rolu">
          <option value="">Rol</option>
          <option value="Supervisor">Supervisor</option>
          <option value="Programador">Programador</option>
        </Select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizarol" data-dismiss="modal">
          Actualizar
        </button>
      </div>
    </div>
  </div>
</div>


   </body>
 </html>

 <script type="text/javascript">
       $(document).ready(function(){
           $('#tabla').load('views/tabla.view.php');
       });
 </script>

<script type="text/javascript">
      $(document).ready(function(){
           $('#guardarnuevo').click(function(){
               nombre=$('#nombre').val();
               apellidos=$('#apellidos').val();
               grupo=$('#grupo').val();
               rol=$('#rol').val();
                  agregardatos(nombre, apellidos, grupo, rol);
           });

        $('#actualizadatos').click(function(){
            actualizaDatosg();
        });

        $('#actualizarol').click(function(){
            actualizaDatosr();
        });

      });
</script>
