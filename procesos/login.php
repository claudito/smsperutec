<?php 

include('../autoload.php');


$funciones  =  new Funciones();

$name =  $funciones->validar_xss($_POST['name']);
$pwd  =  $funciones->validar_xss($_POST['pwd']);

if (empty($name))
 {
   echo "emptyname";
 }
 else if (empty($pwd))
 {
   echo "emptypwd";
 }
 else if (empty($name) AND empty($pwd))
 {
   echo "emptynamepwd";
 }
 else
 {
 	$acceso =  new Acceso($name,md5($pwd));
    echo $acceso -> Login();

 }





 ?>