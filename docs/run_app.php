<?php
/*
* Programa de ejemplo que usa la libreria api sms para enviar mensajes y para consultar saldo
*
*
*/
require './lib_api_sms.php';

/*

$result_balance=balanceSMS();
//Mostramos el resultado
//echo "error:" . $result_balance["message"];
echo "balance:" . $result_balance["balance"];


//Enviando mensaje
$phone = "996927599";
$text = "Enviando1 esta es una prueba 123";
$type = 0; // sms largo 0, sms corto 1
$result_sms=sendSMS($phone,$text,$type);
//Mostramos el resultado
echo "error:".$result_sms["message"];

sleep(2);

$result_sms=getAnswers();
//Mostramos el resultado
echo "Datos:";
print_r($result_sms["data"]);

*/

//Enviando mensaje
$phone = "997935085";
$text = "Enviando1 esta es una prueba 123";
$type = 0; // sms largo 0, sms corto 1
$result_sms=sendSMS($phone,$text,$type);
//Mostramos el resultado
echo "error:".$result_sms["message"];


?>