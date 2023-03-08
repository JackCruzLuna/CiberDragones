<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

$email = isset($_POST['email']) ? $_POST['email']:'';
$password = isset($_POST['password']) ? $_POST['password']:'';
$correo="ﷻ";
$passwordDos="ﷻ";



$con = new SQLite3("data.db");

$cs = $con -> query ("SELECT * FROM login WHERE email = '$email'");
while ($result = $cs -> fetchArray()){
    $correo =$result['email'];
}

$_SESSION['correo'] = $correo;

if ($correo == $email) {
	$csDos = $con -> query ("SELECT * FROM login WHERE password = '$password'");
	while ($result = $cs -> fetchArray()){
		$passwordDos =$result['password'];
	}

	$_SESSION['passwordDos'] = $passwordDos;

	if ($correo == $email && $passwordDos == $password) {
		echo '<script>window.location="index.php"</script>';
	}else{
		echo '<script>alert(" Correo o Contraseña incorrecto")</script>';
		echo '<script>window.location="log.php"</script>';
	}
}else{
	echo '<script>alert("Usuario no registrado")</script>';
	echo '<script>window.location="registro.html"</script>';
}
?>


 