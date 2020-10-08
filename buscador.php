<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Buscador</title>
  </head>
  <body>
      <h1>Buscador de Alumnos por Curso</h1>
      <form class="" action="buscador.php" method="post">
        <!--<input type="text" name="cursos" placeholder="Ingresar el curso...">-->
        <select class="form-control" name="cursos">
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
        <input type="submit" value="BUSCAR">
      </form>
      <hr>
      <hr>
      <h1>RESULTADOS</h1>
      <table border="2px">
          <thead>
              <th>NOMBRE</th>
              <th>APELLIDOS</th>
              <th>RUT</th>
              <th>CURSO</th>
          </thead>

        <tbody>

          <?php

              include 'functions/leer.php';
	      if (isset($query)){
              while($row= mysqli_fetch_array($query)){?>

                <tr>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['apellidos'] ?></td>
                    <td><?= $row['rut'] ?></td>
                    <td><?= $row['curso'] ?></td>
                </tr>

            <?php }
            }
            ?>

        </tbody>

      </table>
  </body>
</html>
