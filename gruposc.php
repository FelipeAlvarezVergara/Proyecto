<?php

    require 'admin/config.php';
    require 'functions/basealumnos.php';

 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>Grupos Curso</title>
    <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">

     <script src="js/jquery-3.5.1.min.js"></script>
     <script src="js/bootstrap/js/bootstrap.js"></script>
  </head>
  <body>
      <div class="container">
        <div id="tabla">
          <div class="row">
            <div class="col-sm-12">
              <h2>Cursos</h2>
              <form action="gruposc.php" method="post">
                <select class="browser-default custom-select" name="cursos">
                  <option value="">Curso</option>
                  <option value="Algoritmos y Estrucuras de Datos">Algoritmos y Estructuras de datos</option>
                  <option value="Base de Datos">Base de Datos</option>
                  <option value="Ciberseguridad">Ciberseguridad</option>
                  <option value="Conectividad y Soliciones Moviles">Conectividad y Soluciones Moviles</option>
                  <option value="Desafio Tecnologico">Desafio Tecnologico</option>
                  <option value="Desarrollo Web y Movil">Desarrollo Web y Movil</option>
                  <option value="Gestion de la Trasnformacion Digital">Gestion de la Trasnformacion Digital</option>
                  <option value="Ingenieria de Software I">Ingenieria de Software I</option>
                  <option value="Ingenieria de Software II">Ingenieria de Software II</option>
                  <option value="Introduccion a la Ingenieria">Introduccion a la Ingenieria</option>
                  <option value="Introduccion a la Programacion">Introduccion a la Programacion</option>
                  <option value="Metodos Cuantitativos">Metodos Cuantitativos</option>
                  <option value="Mineria de Datos">Mineria de Datos</option>
                  <option value="Paradigmas de Programacion">Paradigmas de Programacion</option>
                  <option value="Tecnologia Disruptivas">Tecnologia Disruptivas</option>
                </select>
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Buscar">

               <table class="table table-hover table-condensed table-borderer">
                  <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>RUT</th>
                    <th>Grupos</th>
                  </tr>

                <?php

                    include 'functions/gleer.php';
                    if(isset($query)){
                      while($row= mysqli_fetch_array($query)){

                 ?>

                 <tr>
                     <td><?= $row['nombre'] ?></td>
                     <td><?= $row['apellidos'] ?></td>
                     <td><?= $row['rut'] ?></td>
                     <td>
                         <button type="button" class="btn btn-success btn-sm" name="save">Crear grupo</button>
                     </td>
                 </tr>
               <?php }
                   }
                 ?>
               </table>
              </form>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
