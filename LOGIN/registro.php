<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

$nombre = isset($_POST['nombre']) ? $_POST['nombre']:'';
$apaterno = isset($_POST['apaterno']) ? $_POST['apaterno']:'';
$amaterno = isset($_POST['amaterno']) ? $_POST['amaterno']:'';
$email = isset($_POST['email']) ? $_POST['email']:'';
$password = isset($_POST['password']) ? $_POST['password']:'';
$correo = '';

$con = new SQLite3("data.db");
$cs = $con -> query ("SELECT * FROM login WHERE email = '$email'");
while ($result = $cs -> fetchArray()){
    $correo =$result['email'];
}

if ($correo == $email) {
	echo '<script>alert("Ya existe este correo")</script>';
	echo '<script>window.location="registro.html"</script>';
}else{ 
	
		$csDos = $con -> query("INSERT INTO login (nombre,apaterno,amaterno,email,password) VALUES ('$nombre', '$apaterno','$amaterno', '$email','$password')");
		echo '<script>alert("¡¡ Registro exitoso !!")</script>';
		echo '<script>window.location="log.php"</script>';
		
	}

?>
 