<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");


$email = isset($_POST['email']) ? $_POST['email']:'';
$password = isset($_POST['password']) ? $_POST['password']:'';
$correo=" ";
$contraseña=" ";



$con = new SQLite3('data.db');
$cs=$con->query("SELECT * FROM login WHERE email='$email'");
while ($res= $cs->fetchArray());
{
	$correo =$res['email'];
	 }
	
if ( $correo=$con->query("SELECT * FROM login WHERE email='$email'") ) { 
   
	}if (  $correo=$con->query("SELECT * FROM login WHERE password='$password'")) {

	}else{
	
	}


?>
 