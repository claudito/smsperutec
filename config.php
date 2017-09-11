<?php 
#error_reporting(0);
date_default_timezone_set('America/Lima');

$key  = date('Y-m-d').$_SERVER['SERVER_NAME']."SMS";

define("PATH", "http://sms.perutec.com.pe/");
define("RUTA", dirname(__FILE__).DIRECTORY_SEPARATOR);
define("SERVERBD","localhost");
define("USERBD", "root");
define("PASSBD", "userperutecdb");
define("BD", "smsperutec");
//definir su apikey y su apicard aqui
define('API_KEY','8B3615CA7C53');
define('API_CARD','9771047004');


define("KEY",$key);

define("USUARIO", "usuario");
define("NOMBRES", "nombres");

 ?>