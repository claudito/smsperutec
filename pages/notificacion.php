<?php 
include('../autoload.php');
include('../session.php');

$assets = new Assets();
$html   = new Html();
$assets ->principal('Notificación SMS');
$assets ->sweetalert();
?>
<script>
function actualiza_contenido()
{
$('#capa').load('consulta-saldo.php');
}
setInterval('actualiza_contenido()', 1000 );
</script>
<?php $html->header(); ?>

<div class="row">
<div class="col-md-12">
<?php include('../templates/nav.php'); ?>
</div>
</div>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="panel panel-primary">
  <div class="panel-heading">
  Enviar Notificación
  <div class="pull-right">
  <div id="capa"></div>
  </div>
  </div>
  <div class="panel-body">

  <div id="mensaje"></div>

  <form  id="enviar"  method="post" autocomplete="off">
     
     <div class="form-group">
     <label>Cliente</label>
     <select name="cliente" id="cliente" class="form-control" required="">
     <option value="">Seleccionar Cliente</option>
     <?php 
      $clientes  = new Clientes();
      foreach ($clientes->lista() as $key => $value) 
      {
        echo "<option value='".$value['id']."'>".$value['nombres'].' '.$value['apellidos']."</option>";
      }

      ?>
     </select>
     </div>

     <div class="form-group">
     <label>Mensaje</label>
     <textarea name="mensaje" id=""  rows="5" class="form-control" required="" maxlength="140"></textarea>
     </div>

     
     <button class="btn btn-primary">Enviar</button>


  </form>


  </div>
</div>
</div>

</div>


<script src="../ajax/sms.js"></script>
<?php $html -> footer(); ?>