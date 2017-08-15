<?php 

include('../autoload.php');
include('../session.php');

$assets = new Assets();
$html   = new Html();
$assets ->principal('Importación desde Excel');

?>

<?php $html->header(); ?>

<div class="row">
<div class="col-md-12">
<?php include'../templates/nav.php'; ?>
</div>
</div>


<div class="row">
<div class="col-md-12">
<div class="panel panel-success">
    <div class="panel-heading">
    Importación de clientes desde un documento Excel
    </div>
	<div class="panel-body">
	 <form action="" class="form-inline">
	 <input type="file" name="" id="" class="form-control">
	 <button class="btn btn-success disabled">Cargar</button>
	 </form>
	</div>
</div>
</div>
</div>




<?php $html -> footer(); ?>