<?php 


class Clientes
{

protected $nombres;
protected $apellidos;
protected $numero;


function  __construct($nombres='',$apellidos='',$numero='')
{
	$this->nombres   = $nombres;
	$this->apellidos = $apellidos;
	$this->numero    = $numero;
}
  

function  agregar()
{

$db     =  new Conexion();
$query  = "SELECT * FROM clientes WHERE numero='".$this->numero."'";
$result = $db->query($query);
if ($result->num_rows>0) 
{
	return "existe";
} 
else 
{
	$query  = "INSERT INTO clientes(nombres,apellidos,numero)VALUES('".$this->nombres."','".$this->apellidos."','".$this->numero."')";
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


}

function actualizar($id)
{

$db     =  new Conexion();
$query  = "UPDATE  clientes SET nombres='".$this->nombres."',apellidos='".$this->apellidos."',numero='".$this->numero."' WHERE id='".$id."'";
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


function eliminar($id)
{

$db     =  new Conexion();
$query  = "DELETE FROM clientes WHERE id='".$id."'";
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




function consulta($id,$campo)
{

$db     =  new Conexion();
$query  = "SELECT * FROM clientes WHERE id='".$id."'";
$result = $db->query($query);
$dato   = mysqli_fetch_array($result);
return $dato[$campo];

}



function lista()
{

$db     =  new Conexion();
$dato   =  array();
$query  = "SELECT * FROM clientes ORDER BY nombres";
$result = $db->query($query);
while ($fila = mysqli_fetch_assoc($result))
{
	  $dato[]= $fila;
}

return $dato;

}



}














 ?>