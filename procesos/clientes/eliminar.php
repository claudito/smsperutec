<?php 

include'../../autoload.php';
include'../../session.php';

$funciones = new Funciones();
$message   = new Message();

$id        =  $funciones->validar_xss($_POST['id']);

$clientes  = new Clientes();

$valor     =  $clientes->eliminar($id);

switch ($valor) {
	case 'ok':
	 echo  $message->mensaje("Cliente Eliminado","success","...",2);
		break;
	case 'error':
	 echo  $message->mensaje("Error","error","...",2);
		break;
	default:
	echo  $message->mensaje("Error","error","...",2);
		break;
}



 ?>