<?php 


class Opciones
{

function  __construct()
{

}


function consulta($codigo,$campo)
{

$db     =  new Conexion();
$query  = "SELECT * FROM options WHERE codigo='".$codigo."'";
$result = $db->query($query);
$dato   = mysqli_fetch_array($result);
return $dato[$campo];

}



}



 ?>