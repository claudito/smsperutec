<?php 

include('../autoload.php');

$sms  = new Sms();

$result_balance= $sms->balanceSMS();
$saldo =  $result_balance["balance"];
$saldo = $saldo*10;
$saldo;

?>
 Saldo Actual <span class="badge"><?php echo $saldo; ?></span> sms