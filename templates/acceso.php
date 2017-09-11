<?php 
$assets = new Assets();
$html   = new Html();
$assets ->principal('Acceso');
$assets ->sweetalert();
?>
<script src="ajax/login.js"></script>
<?php $html->header(); ?>



<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<center>
<img src="assets/img/sms.png" alt="" class="img-responsive" width="150" height="150">
</center>
<br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Notificación de SMS</h3>
  </div>
  <div class="panel-body">

   <div class="err" id="add_err"></div>

  <form action="./" method="post" autocomplete="off">

  <div class="form-group">
  <label for="name">Usuario </label>
  <input type="text"   placeholder="Usuario" class="form-control" name="name" id="name"  autofocus="" />
  </div>

  <div class="form-group">
  <label for="name">Contraseña</label>
  <input type="password" size="30"  placeholder="Contraseña"  class="form-control" name="word" id="word"  />
  </div>

  <input type="hidden" id="path" value="<?php echo PATH; ?>">

  <input type="submit" id="login" class="btn btn-primary" name="login" value="Iniciar Sesión" class="loginbutton" >

  </form>

  </div>
</div>
</div>

</div>



<?php $html -> footer(); ?>