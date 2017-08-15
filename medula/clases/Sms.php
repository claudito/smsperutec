<?php 

class Sms
{



/*
 * consultamos saldo
 */   
 
function balanceSMS(){

if(extension_loaded('curl')){
 
    $apikey = API_KEY;
    $apicard = API_CARD;
    $fields_string = "";

    //Preparamos las variables que queremos enviar
    $url = 'http://api2.gamacom.com.pe/smsbalance';
    $fields = array(
                        'apicard'=>urlencode($apicard),
                        'apikey'=>urlencode($apikey)
                );

    //Preparamos el string para hacer POST (formato querystring)
    foreach($fields as $key=>$value) { 
        $fields_string .= $key.'='.$value.'&'; }
        $fields_string = rtrim($fields_string,'&');


        //abrimos la conexion
        $ch = curl_init();

       //configuramos la URL, numero de variables POST y los datos POST
       curl_setopt($ch,CURLOPT_URL,$url);
       curl_setopt($ch,CURLOPT_POST,count($fields));
       curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
       curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);

       //ejecutamos POST
       $result = curl_exec($ch);

       //cerramos la conexion
       curl_close($ch);

       //Resultado
       $array = json_decode($result,true);

      return $array;
}else{
 throw new Exception("Se requiere PHP5 con cURL");      
       
}
}

/*
 * Enviamos un solo mensaje
 */   
 
function sendSMS($phone,$text,$type=0){
 
if(extension_loaded('curl')){ 

    $apikey = API_KEY;
    $apicard = API_CARD;
    $fields_string = "";

    //Preparamos las variables que queremos enviar
    $url = 'http://api2.gamacom.com.pe/smssend';
    $fields = array(
                        'apicard'=>urlencode($apicard),
                        'apikey'=>urlencode($apikey),
                        'smsnumber'=>urlencode($phone),
                        'smstext'=>urlencode($text),
                        'smstype'=>urlencode($type)
                );

    //Preparamos el string para hacer POST (formato querystring)
    foreach($fields as $key=>$value) { 
       $fields_string .= $key.'='.$value.'&'; 
    }
    $fields_string = rtrim($fields_string,'&');


    //abrimos la conexion
    $ch = curl_init();

    //configuramos la URL, numero de variables POST y los datos POST
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,count($fields));
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);

    //ejecutamos POST
    $result = curl_exec($ch);

    //cerramos la conexion
    curl_close($ch);

    //Resultado
    $array = json_decode($result,true);

    return $array;
}else{
 throw new Exception("Se requiere PHP5 con cURL");      
       
}
}

/*
 muestra respuestas sms
*/

function getAnswers(){

if(extension_loaded('curl')){
 
    $apikey = API_KEY;
    $apicard = API_CARD;
    $fields_string = "";

    //Preparamos las variables que queremos enviar
    $url = 'http://api2.gamacom.com.pe/getanswers';
    $fields = array(
                        'apicard'=>urlencode($apicard),
                        'apikey'=>urlencode($apikey)
                );

    //Preparamos el string para hacer POST (formato querystring)
    foreach($fields as $key=>$value) { 
        $fields_string .= $key.'='.$value.'&'; }
        $fields_string = rtrim($fields_string,'&');


        //abrimos la conexion
        $ch = curl_init();

       //configuramos la URL, numero de variables POST y los datos POST
       curl_setopt($ch,CURLOPT_URL,$url);
       curl_setopt($ch,CURLOPT_POST,count($fields));
       curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
       curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);

       //ejecutamos POST
       $result = curl_exec($ch);

       //cerramos la conexion
       curl_close($ch);

       //Resultado
       $array = json_decode($result,true);

      return $array;
}else{
 throw new Exception("Se requiere PHP5 con cURL");      
       
}
}


}




 ?>