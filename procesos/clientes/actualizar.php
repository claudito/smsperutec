<?php 

include'../../autoload.php';
include'../../session.php';

$funciones = new Funciones();
$message   = new Message();

$id        =  $funciones->validar_xss($_POST['id']);
$nombres   =  $funciones->validar_xss($_POST['nombres']);
$apellidos =  $funciones->validar_xss($_POST['apellidos']);
$numero    =  $funciones->validar_xss($_POST['numero']);

$clientes  = new Clientes($nombres,$apellidos,$numero);

$valor     =  $clientes->actualizar($id);

switch ($valor) {
	case 'ok':
	 echo  $message->mensaje("Cliente Actualizado","success","...",2);
		break;
	case 'error':
	 echo  $message->mensaje("Error","error","...",2);
		break;
	default:
	echo  $message->mensaje("Error","error","...",2);
		break;
}



 ?>