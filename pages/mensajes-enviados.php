<?php 

include('../autoload.php');
include('../session.php');

$assets = new Assets();
$html   = new Html();
$assets ->principal('Mensajes Enviados');
$assets ->datatables();
?>

<?php $html->header(); ?>


<div class="row">
<div class="col-md-12">
<?php include('../templates/nav.php'); ?>
</div>
</div>


<div class="row">
<div class="col-md-12">
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Mensajes Enviados</h3>
  </div>
  <div class="panel-body">
  <div class="table-responsive">
<table id="consulta"  class="table table-hover table-bordered table-condensed">
<thead>
<tr class="success">
  <th>CLIENTE</th>
  <th>DETALLE</th>
  <th>FECHA</th>
</tr>
</thead>
<tbody>
<?php 
$notificacion = new Notificacion();
foreach ($notificacion->lista() as $key => $value): ?>
<tr>
<td><?php echo $value['nombres'].' '.$value['apellidos']; ?></td>
<td><?php echo $value['detalle']; ?></td>
<td><?php echo date_format(date_create($value['fecha_creacion']),'d/m/Y H:i:s'); ?></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
<script>
$(document).ready(function(){
$('#consulta').DataTable();
});
</script>
</div>
  </div>
</div>
</div>
</div>



<?php $html -> footer(); ?>