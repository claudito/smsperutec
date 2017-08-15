<?php 


 include'autoload.php';

 $sms   = new Sms();
 #Envió de Sms
  $phone = "997935085";
  $text =  "123";
  $type = 0; // sms largo 0, sms corto 1
  $result_sms= $sms->sendSMS($phone,$text,$type);
  
  #Confirmación de Envió
  echo $result_sms["message"];





 ?>