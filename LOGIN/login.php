
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/sweetalert2@11.js"></script>
</body>
</html>




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
		echo '
        <script>
        Swal.fire({
        title: "Correo o Contraseña Incorrecto"",
	}).then((result) => {
		window.location="log.php"
	})
	</script>';
}
}else{
echo '
<script>
Swal.fire({
	title: "Usuario no Registrado",
}).then((result) => {
		window.location="registro.html"
})
</script>';
}

?>