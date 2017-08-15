<?php

include '../../../autoload.php';

$clientes  = new Clientes();
?>

<?php if (count($clientes->lista())>0): ?>
  <div class="panel panel-success">
    <div class="panel-heading">
     Lista de Clientes
    </div>
    <div class="panel-body">
      <div class="table-responsive">
    <table id="consulta" class="table table-bordered table-condensed">
      <thead>
        <tr class="success">
          <th>ID</th>
          <th>NOMBRES</th>
          <th>APELLIDOS</th>
          <th>NÚMERO</th>
          <th>FECHA</th>
          <th style="text-align: center;">ACCIONES</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($clientes->lista() as $key => $value): ?>
      <tr>
      <td><?php echo $value['id']; ?></td>
      <td><?php echo $value['nombres']; ?></td>
      <td><?php echo $value['apellidos']; ?></td>
      <td><?php echo $value['numero']; ?></td>
      <td><?php echo date_format(date_create($value['fecha_creacion']),'d/m/Y H:i:s'); ?></td>
      <td style="text-align: center;">
    <a data-id="<?php echo $value["id"];?>" class="btn btn-edit btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></a>
    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $value['id']?>"><i class="glyphicon glyphicon-trash"></i></button>
    </td>
  </td>
      </tr>
      <?php endforeach ?>
      </tbody>
    </table>
  </div>
     <script>
 $(document).ready(function(){
    $('#consulta').DataTable();
});
 </script>
    </div>
  </div>

  <!-- Modal -->
  <script>
    $(".btn-edit").click(function(){
      id = $(this).data("id");
      $.get("../templates/modal/clientes/actualizar.php","id="+id,function(data){
        $("#form-edit").html(data);
      });
      $('#editModal').modal('show');
    });
  </script>
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Actualizar</h4>
        </div>
        <div class="modal-body">
        <div id="form-edit"></div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->




<?php else: ?>
 <p class="alert alert-warning">No registros para mostrar.</p>
<?php endif ?>