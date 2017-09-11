<?php 


class Notificacion
{

protected $cliente;
protected $detalle;

function  __construct($cliente='',$detalle='')
{

	$this->cliente = $cliente;
	$this->detalle = $detalle;
}
  

function agregar()
{

$db     =  new Conexion();
$query  = "INSERT INTO cita(id_clientes,detalle,fecha_creacion)VALUES('".$this->cliente."','".$this->detalle."','".date('Y-m-d H:i:s')."')";
$result = $db->query($query);
if ($result) 
{
	return "ok";
}
else
{
    return "error";
}

}



function lista()
{
$dato   = array();
$db     =  new Conexion();
$query  = "SELECT c.id,cl.nombres,cl.apellidos,c.detalle,c.fecha_creacion FROM cita as c INNER JOIN clientes as cl ON c.id_clientes=cl.id";
$result = $db->query($query);
while ($fila = mysqli_fetch_assoc($result))
{
	  $dato[] = $fila;
}

return $dato;

}



}














 ?>