<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

$nombre = isset($_POST['nombre']) ? $_POST['nombre']:'';
$apaterno = isset($_POST['apaterno']) ? $_POST['apaterno']:'';
$amaterno = isset($_POST['amaterno']) ? $_POST['amaterno']:'';
$email = isset($_POST['email']) ? $_POST['email']:'';
$password = isset($_POST['password']) ? $_POST['password']:'';



$con = new SQLite3('data.db');
$cs=$con->query("SELECT * FROM login WHERE email='$email'");
while ($res= $cs->fetchArray());
{
	$correoDos=$res ['email'];
}

if ($correoDos== $email) { 
	echo '<script> alert("Utilice otro correo"); </script>
	<script> window.location="login.html" </script>
	'; 
	}else{
		$csDos = $con -> query("INSERT INTO login (nombre,apaterno,amaterno,email,password VALUES ('$nombre', '$apaterno','$amaterno', '$email','$password')");
		echo '<script> alert("DATOS REGISTRADOS "); </script>
		<script> window.location="login.html" </script>
		';
	}

?>
 