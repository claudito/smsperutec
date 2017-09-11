<?php 

include('../autoload.php');

$sms       = new Sms();
$opciones  = new Opciones();
$cita      = new Notificacion(); 

$cant_cita =  count($cita->lista());
$sms_perm  = round($opciones->consulta('sms_perm','valor'));

$sms_perm  = $sms_perm-$cant_cita;


/*
$result_balance= $sms->balanceSMS();
$saldo =  $result_balance["balance"];
$saldo = $saldo*10;
$saldo;*/

?>
 Saldo Actual <span class="badge"><?php echo $sms_perm; ?></span> sms