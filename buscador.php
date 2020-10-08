<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Buscador</title>
    <link rel="stylesheet" href="css/tabla.css">
  </head>
  <body>
      <h1>Alumnos Por Curso</h1>
      <form action="buscador.php" method="post">
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

        <div class="container-table">
            <div class="table__title">Lista De Alumnos</div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Apellidos</div>
            <div class="table__header">RUT</div>
            <div class="table__header">Curso</div>
          <?php

              include 'functions/leer.php';
	           if (isset($query)){
              while($row= mysqli_fetch_array($query)){?>
            <div class="table__item"><?= $row['nombre'] ?></div>
            <div class="table__item"><?= $row['apellidos'] ?></div>
            <div class="table__item"><?= $row['rut'] ?></div>
            <div class="table__item"><?= $row['curso'] ?></div>

            <?php }
            }
            ?>
        </div>
  </body>
</html>
