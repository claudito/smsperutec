<?php 


class  Acceso{


protected $user;
protected $pass;


function __construct($user='',$pass='')
{

	 $this->user  = $user;
	 $this->pass  = $pass;

}


function Login()
{
   
   $db=  new Conexion();

   $query = "SELECT  * FROM usuario WHERE usuario='".$this->user."' AND 
     pass='".$this->pass."'";
   $result = $db->query($query);
   $dato   = mysqli_fetch_array($result);
	if (mysqli_num_rows($result)>0) 
	{
	session_start();
	$_SESSION[KEY.USUARIO]=$dato['id'];
	$_SESSION[KEY.NOMBRES]=$dato['nombres'];


	return "true";


	} 
	else
	{
	return "error";
	}

   
}


function Logout()
{

session_start();
if (!isset($_SESSION[KEY.USUARIO]))
{
 header('Location: '.PATH.'');
} 
else 
{
	unset($_SESSION[KEY.USUARIO]);
	unset($_SESSION[KEY.NOMBRES]);
    header('Location: '.PATH.'');
    
}
 


	
}



}







 ?>