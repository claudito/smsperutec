<?php

include'../autoload.php';
include'../session.php';

if (isset($_POST['cliente']) AND isset($_POST['mensaje'])) 
{

$funciones = new Funciones();
$clientes  =  new Clientes();
    $sms   = new Sms();
$message   = new Message();

#variables
$idcliente =  $funciones->validar_xss($_POST['cliente']);
$mensaje    = $funciones->validar_xss($_POST['mensaje']);

#Envió de Sms
$numero    = $clientes->consulta($idcliente,'numero');
$result_sms= $sms->sendSMS($numero,$mensaje,0);

#Confirmación de Envió
$valor =  $result_sms["message"];


switch ($valor) {
	case '0':
	 echo  $message->mensaje("Mensaje Enviado","success","...",2);
	 $notificacion  =  new Notificacion($idcliente,$mensaje);
	 $notificacion->agregar();
		break;
	case '2':
	 echo  $message->mensaje("Texto enviado supera la cantidad de caracteres permitidos","warning","...",2);
		break;
	case '3':
	 echo  $message->mensaje("key no valida","warning","...",2);
		break;
	case '4':
	 echo  $message->mensaje("Datos de mensaje o telefono vacios o nulos.","warning","...",2);
		break;
	case '5':
	 echo  $message->mensaje("No hay saldo disponible","warning","...",2);
		break;
	default:
	 echo  $message->mensaje("Error","error","...",2);
		break;
}


}
 else 

{
	header('Location: '.PATH.'');
}



 ?>