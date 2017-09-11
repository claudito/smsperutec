  <!-- Modal -->
  <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Cliente</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregar" autocomplete="Off">
  <div class="form-group">
    <label for="name">Nombres</label>
    <input type="text" class="form-control" name="nombres" required="" onchange="Mayusculas(this)">
  </div>
  <div class="form-group">
    <label for="lastname">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" required onchange="Mayusculas(this)">
  </div>
  <div class="form-group">
    <label for="address">Celular</label>
    <input type="text" class="form-control" name="numero" required maxlength="9" 
    pattern="[0-9]{9}" > 
  </div>


  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->