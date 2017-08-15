<?php
include '../../../autoload.php';
include'../../../session.php';

$clientes  =  new Clientes();

$id        =  $_GET['id'];

?>

<?php if($clientes->consulta($id,'id') > 0):?>

<form role="form" id="actualizar" autocomplete="Off">
<input type="hidden" name="id" value="<?php echo $id; ?>">

  <div class="form-group">
    <label for="name">Nombres</label>
    <input type="text" class="form-control" name="nombres" required="" onchange="Mayusculas(this)" value="<?php echo $clientes->consulta($id,'nombres'); ?>">
  </div>
  <div class="form-group">
    <label for="lastname">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" required onchange="Mayusculas(this)" value="<?php echo $clientes->consulta($id,'apellidos'); ?>">
  </div>
  <div class="form-group">
    <label for="address">Celular</label>
    <input type="text" class="form-control" name="numero" required maxlength="9" value="<?php echo $clientes->consulta($id,'numero'); ?>">
  </div>




<button type="submit" class="btn btn-primary">Actualizar</button>
</form>



<script>

    $("#actualizar").submit(function(e){
    e.preventDefault();
    var parametros = $(this).serialize();
     $.ajax({
          type: "POST",
          url: "../procesos/clientes/actualizar.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#mensaje").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#mensaje").html(datos);
         //$("#actualizar")[0].reset();  //resetear inputs
          $('#editModal').modal('hide'); //ocultar modal
          $('body').removeClass('modal-open');
          $("body").removeAttr("style");
          $('.modal-backdrop').remove();
          loadTabla(1);
          }
      });
  });


</script>

<?php else:?>
  <p class="alert alert-danger">No se puede actualizar la información</p>
<?php endif;?>