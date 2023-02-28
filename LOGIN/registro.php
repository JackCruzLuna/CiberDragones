<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

$nombre = isset($_POST['nombre']) ? $_POST['nombre']:'';
$apaterno = isset($_POST['apaterno']) ? $_POST['apaterno']:'';
$amaterno = isset($_POST['amaterno']) ? $_POST['amaterno']:'';
$email = isset($_POST['email']) ? $_POST['email']:'';
$password = isset($_POST['password']) ? $_POST['password']:'';



$con = new SQLite3('data.db');
$cs = $con -> query("INSERT INTO login (nombre,apaterno,amaterno,email,password) VALUES ('$nombre', '$apaterno','$amaterno', '$email','$password')");

echo 'Datos insertados';
//echo'
////<script> window.location="registro.html"
//</script>
//';
echo '
<html>
    <meta http-equiv="REFRESH" content="0,url=login.html"> 
</html>
';
?>
 