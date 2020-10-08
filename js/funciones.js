
function agregardatos(nombre, apellidos, grupo, rol){

    datos = "nombre=" + nombre +
            "&apellidos=" + apellidos +
            "&grupo=" + grupo +
            "&rol=" + rol;

    $.ajax({
        type: "POST",
        url: "functions/agregarGrupos.php",
        data: datos,
        success:function(r){
            if (r==1) {
                $('#tabla').load('views/tabla.view.php');
                alertify.success("Agregado con exito");
            } else {
                alertify.error("Fallo al agregar");
            }
        }
    });
}

function agregaformg(datos){

    d=datos.split('||');

    $('#idalumno').val(d[0]);
    $('#grupou').val(d[3]);

}

function actualizaDatosg(){

    id=$('#idalumno').val();
    grupo=$('#grupou').val();

    datos = "id=" + id +
            "&grupo=" + grupo;


      $.ajax({
          type: "POST",
          url: "functions/actualizaDatosg.php",
          data: datos,
          success:function(r){
            if (r==1) {
                $('#tabla').load('views/tabla.view.php');
                alertify.success("Actualizado con exito");
            } else {
                alertify.error("Fallo al Actualizar");
            }
          }
      });

}

function agregaformr(datos){
    d=datos.split('||');

    $('#idalumno').val(d[0]);
    $('#rolu').val(d[4]);
}

function actualizaDatosr(){
    id=$('#idalumno').val();
    rol=$('#rolu').val();

    datos = "id=" + id +
            "&rol=" + rol;

      $.ajax({
          type: "POST",
          url: "functions/actualizaDatosr.php",
          data: datos,
          success:function(r){
            if (r==1) {
                $('#tabla').load('views/tabla.view.php');
                alertify.success("Actualizado con exito");
            } else {
                alertify.error("Fallo al Actualizar");
            }
          }
      });


}

function preguntarSiNo(id){
  alertify.confirm('Eliminar Alumno', '¿Esta seguro de eliminar este alumno?', function(){ eliminarDatos(id) }
              , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

      datos ="id=" + id;

      $.ajax({
          type:"POST",
          url: "functions/eliminarDatos.php",
          data: datos,
          success:function(r){
              if (r==1) {
                  $('#tabla').load('views/tabla.view.php');
                  alertify.success("Eliminado con exito");
              } else {
                  alertify.error("Error al eliminar");
              }
          }

      });
}
