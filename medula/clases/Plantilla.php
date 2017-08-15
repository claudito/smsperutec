<?php 

class Plantilla
{


function __construct()
{

}



function cita($fullname,$fecha)
{
    
   $mensaje = "Sr(a) ".$fullname.", para hacerle recordar su cita programada el ".$fecha." con PERUTEC SAC - Lo(@) Esperamos - Gracias";
   return $mensaje;	
  

}


function consultoria($fullname,$fecha,$empresa)
{
    
   $mensaje = "Sr(a) ".$fullname.", para hacerle recordar su visita de consultoria a la empresa ".$empresa." el dia  ".$fecha." - Gracias";
   return $mensaje;	

}


function confirmacion_pendiente($fullname,$fecha,$empresa)
{
    
   $mensaje = "Sr(a) ".$fullname.", para recordarle los cambios subidos a Trello(App Costos)- ".$fecha." - Gracias";
   return $mensaje;	

}



}



 ?>