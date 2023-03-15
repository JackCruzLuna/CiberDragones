
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
	echo '
?>
        <script>
 
        Swal.fire({
        title: "Ya existe este correo",
        }).then((result) => {
            window.location="registro.html"
        })
        </script>';
}else{
	$csDos = $con -> query("INSERT INTO login (nombre,apaterno,amaterno,email,password) VALUES ('$nombre', '$apaterno','$amaterno', '$email','$password')");
    echo '
    <script>
    Swal.fire({
    title: "¡¡ Registro exitoso !!",
    }).then((result) => {
        window.location="log.php"
    })
    </script>';
}

?>
 