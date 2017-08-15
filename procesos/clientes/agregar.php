<?php 

include'../../autoload.php';
include'../../session.php';

$funciones = new Funciones();
$message   = new Message();


$nombres   =  $funciones->validar_xss($_POST['nombres']);
$apellidos =  $funciones->validar_xss($_POST['apellidos']);
$numero    =  $funciones->validar_xss($_POST['numero']);

$clientes  = new Clientes($nombres,$apellidos,$numero);

$valor     =  $clientes->agregar();

switch ($valor) {
	case 'existe':
	 echo  $message->mensaje("Cliente Duplicado","warning","intente con otro número",2);
		break;
	case 'ok':
	 echo  $message->mensaje("Cliente Registrado","success","...",2);
		break;
	case 'error':
	 echo  $message->mensaje("Error","error","...",2);
		break;
	default:
	echo  $message->mensaje("Error","error","...",2);
		break;
}



 ?>