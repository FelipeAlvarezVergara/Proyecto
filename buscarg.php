<?php

      require 'functions/condb.php';

      $sql = "SELECT id, nombre, apellidos, grupo, rol FROM grupos ORDER BY grupo ASC";
      $query = mysqli_query($conn, $sql);

?>
<div class="row">
      <div class="col-sm-8"></div>
      <div class="col-sm-4">
          <label>Buscador:</label>
          <select id="buscadorvivo" class="form-control input-sm">
              <option value="0">Seleciona tu nombre</option>
              <?php
                while($ver=mysqli_fetch_row($query)):
               ?>
               <option value="<?php echo $ver[0] ?>">
                   <?php echo $ver[1]." ".$ver[2] ?>
               </option>
             <?php endwhile; ?>
         </select>
      </div>
</div>

<script type="text/javascript">
      $(document).ready(function(){
          $('#buscadorvivo').select2();

          $('#buscadorvivo').change(function(){
              $.ajax({
                type:"POST",
                data: 'valor=' + $('#buscadorvivo').val(),
                url: "functions/session.php",
                success:function(r){
                    $('#tabla').load('views/grupos.view.php');
                }
              });
          });
      });
</script>
