<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo PATH; ?>?login=ok">Envio de SMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GESTIÓN<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo PATH; ?>pages/notificacion">CREAR NOTIFICACIÓN</a></li>
            <li><a href="<?php echo PATH; ?>pages/mensajes-enviados">MENSAJES ENVIADOS</a></li>
            <li><a href="<?php echo PATH; ?>pages/clientes">CREAR CLIENTES</a></li>
          </ul>
        </li>
      </ul>
       <!-- 
       <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Cliente">
          </div>
          <button type="submit" class="btn btn-primary">Consultar</button>
        </form>
       -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_SESSION[KEY.NOMBRES]; ?>  <i class="glyphicon glyphicon-user text-success"></i>  </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a style="cursor:pointer;" onclick="logout();">Salir</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>