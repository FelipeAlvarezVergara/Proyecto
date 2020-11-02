<?php

    require 'admin/config.php';
    require 'functions/conexion.php';

    if (isset($_POST['confirmar'])) {
      if (is_array($_POST['id'])) {
        $array = count($_POST['id']);
          for($i=0;$i<$array;$i++){
            $grupo = $_POST['grupo'][$i];
            $rol = $_POST['rol'][$i];
            $id = $_POST['id'][$i];
            $sql = "UPDATE alumno SET grupo = '$grupo', rol = '$rol' WHERE id = '$id'";
            $stat = mysqli_query($conn,$sql);
          }
      }
    }

 ?>
 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <title>Grupos</title>
     <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="css/font-awesome.css">
     <link rel="stylesheet" href="css/grupos.css">

     <script src="js/jquery-3.5.1.min.js"></script>
     <script src="js/funciones.js"></script>
     <script src="js/bootstrap/js/bootstrap.js"></script>

   </head>
   <body>
    <h2>Cursos</h2>
      <form id="form1" action="tablag.php" method="post">
        <select class="form-control" name="cursos">
          <option value="">Cursos</option>
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
        <input type="submit" class="btn btn-primary" name="buscar" value="BUSCAR">
      </form>
      <hr color="black">
      <hr color="black">
        <div class="container">
          <div id="tabla">
            <div class="row">
              <div class="col-sm-12">
                <form id="form" action="tablag.php" method="post">
                  <b>
                  </b>
                  <table class="table table-hover table-condensed table-borderer">
                    <tr>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>RUT</th>
                      <th>Grupo</th>
                      <th>Rol</th>
                    </tr>

                  <?php

                    include 'functions/checkcurso.php';
                    if(isset($query)){
                        while($row= mysqli_fetch_array($query)){

                   ?>

                  <tr>
                      <td><?= $row['nombre'] ?></td>
                      <td><?= $row['apellidos'] ?></td>
                      <td><?= $row['rut'] ?></td>
                      <td>
                        <select name="grupo[]" id="grupo" class="grupo">
                          <option value="G1" <?php if($row['grupo']=="G1"):?>selected<?php endif;?> >G1</option>
                          <option value="G2" <?php if($row['grupo']=="G2"):?>selected<?php endif;?> >G2</option>
                          <option value="G3" <?php if($row['grupo']=="G3"):?>selected<?php endif;?> >G3</option>
                          <option value="G4" <?php if($row['grupo']=="G4"):?>selected<?php endif;?> >G4</option>
                          <option value="G5" <?php if($row['grupo']=="G5"):?>selected<?php endif;?> >G5</option>
                          <option value="G6" <?php if($row['grupo']=="G6"):?>selected<?php endif;?> >G6</option>
                          <option value="G7" <?php if($row['grupo']=="G7"):?>selected<?php endif;?> >G7</option>
                          <option value="G8" <?php if($row['grupo']=="G8"):?>selected<?php endif;?> >G8</option>
                          <option value="G9" <?php if($row['grupo']=="G9"):?>selected<?php endif;?> >G9</option>
                          <option value="G10" <?php if($row['grupo']=="G10"):?>selected<?php endif;?> >G10</option>
                          <option value="G11" <?php if($row['grupo']=="G11"):?>selected<?php endif;?> >G11</option>
                          <option value="G12" <?php if($row['grupo']=="G12"):?>selected<?php endif;?> >G12</option>
                          <option value="G13" <?php if($row['grupo']=="G13"):?>selected<?php endif;?> >G13</option>
                          <option value="G14" <?php if($row['grupo']=="G14"):?>selected<?php endif;?> >G14</option>
                          <option value="G15" <?php if($row['grupo']=="G15"):?>selected<?php endif;?> >G15</option>
                          <option value="G16" <?php if($row['grupo']=="G15"):?>selected<?php endif;?> >G16</option>
                          <option value="G17" <?php if($row['grupo']=="G15"):?>selected<?php endif;?> >G17</option>
                          <option value="G18" <?php if($row['grupo']=="G15"):?>selected<?php endif;?> >G18</option>
                          <option value="G19" <?php if($row['grupo']=="G15"):?>selected<?php endif;?> >G19</option>
                          <option value="G20" <?php if($row['grupo']=="G15"):?>selected<?php endif;?> >G20</option>
                          <option value="G21" <?php if($row['grupo']=="G15"):?>selected<?php endif;?> >G21</option>
                          <option value="G22" <?php if($row['grupo']=="G15"):?>selected<?php endif;?> >G22</option>
                          <option value="G23" <?php if($row['grupo']=="G15"):?>selected<?php endif;?> >G23</option>
                          <option value="G24" <?php if($row['grupo']=="G15"):?>selected<?php endif;?> >G24</option>
                          <option value="G25" <?php if($row['grupo']=="G15"):?>selected<?php endif;?> >G25</option>
                        </select>
                      </td>
                      <td>
                        <select name="rol[]" id="rol" class="rol">
                          <option value="Supervisor" <?php if($row['rol']=="Supervisor"):?>selected<?php endif;?> >Supervisor</option>
                          <option value="Programador" <?php if($row['rol']=="Programador"):?>selected<?php endif;?> >Programador</option>
                        </select>
                      </td>
                      <td><input type="hidden" name="id[]" value="<?= $row['id'] ?>"></td>

                  </tr>

                <?php }
                  }
                   ?>
                  </table>
                  <input type="submit" class="btn btn-primary" name="confirmar" value="Confirmar">
                  <input type="button" id="randomSelect" class="btn btn-warning" name="aleatorio" value="Aleatorio">
                </form>
              </div>
            </div>
          </div>
        </div>
   </body>
 </html>
