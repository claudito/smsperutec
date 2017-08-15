<?php 

include('../autoload.php');
include('../session.php');

$assets = new Assets();
$html   = new Html();
$assets ->principal('');

?>

<?php $html->header(); ?>


<div class="row">
<div class="col-md-12">
<?php include('../templates/nav.php'); ?>
</div>
</div>



<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Configuración</h3>
	</div>
	<div class="panel-body">
	<ul class="list-group">
  <li class="list-group-item">
    <span class="badge"><?php 
$result_balance= $sms->balanceSMS();
$saldo =  $result_balance["balance"];
echo $saldo*10;
?></span>
   SALDO DE SMS
  </li>
</ul>
	</div>
</div>
</div>
</div>




<?php $html -> footer(); ?>