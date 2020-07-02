<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Registro Datos Alumno</title>
    <meta name="viewport" content="width=device-width, user-scalable, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
  </head>
  <body>

      <h1>Registro Alumno</h1>
      <div class="container">
          <h2 class="datos">DATOS</h2>
          <form class="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
              <div class="registro">
                  <input type="text" name="nombre" placeholder="Ingrese su Nombre" class="input-48">
                  <input type="text" name="apellidos" placeholder="Ingrese sus Apellidos" class="input-48">
                  <input type="text" name="rut" id="rut" maxlength="12" placeholder="Ingrese su RUT" class="input-100">
                  <script type="text/javascript">
                        document.getElementById('rut').addEventListener('input', function(evt) {
                        let value = this.value.replace(/\./g, '').replace('-', '');

                        if (value.match(/^(\d{2})(\d{3}){2}(\w{1})$/)) {
                        value = value.replace(/^(\d{2})(\d{3})(\d{3})(\w{1})$/, '$1.$2.$3-$4');
                        }
                        else if (value.match(/^(\d)(\d{3}){2}(\w{0,1})$/)) {
                        value = value.replace(/^(\d)(\d{3})(\d{3})(\w{0,1})$/, '$1.$2.$3-$4');
                        }
                        else if (value.match(/^(\d)(\d{3})(\d{0,2})$/)) {
                        value = value.replace(/^(\d)(\d{3})(\d{0,2})$/, '$1.$2.$3');
                        }
                        else if (value.match(/^(\d)(\d{0,2})$/)) {
                        value = value.replace(/^(\d)(\d{0,2})$/, '$1.$2');
                        }
                        this.value = value;
                      });
                  </script>
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
                  <input type="submit" name="registrar" value="Registrar" class="btn-enviar">
              </div>
          </form>
      </div>
  </body>
</html>
