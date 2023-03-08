<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();
session_destroy();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>
<style>
    * {
        font-family: Century Gothic;
        color: dimgrey;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mx-auto" style="text-align: center;">
                <div class="my-5 mx-auto">
                    <img src="logos/SVG/LOGO_TUVSA.svg" alt="Logo" class="img-fluid" style="width: 35%;">
                    <h1 class="my-4">Inicio de Sesión</h1>

                    <div class="card mx-auto bg-light shadow" style="width: 30rem;text-align: left;">

                        <div class="card-body " style="background-color:rgb(208, 208, 208) ;">
                            
                            <form action="login.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Correo electronico</label>
                                    <input type="email" class="form-control" name="email">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                               
                                <button type="submit" class="btn btn-outline-dark btn-lg form-control">Entrar</button>
                           
                            </form>
                        </div>
                    </div>
                    <div class="card mx-auto my-4 shadow" style="width: 30rem;">
                        <div class="card-body" style="background-color:rgb(208, 208, 208)">
                            Registrar <a href="registro.html"> Nuevo Usuario</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="js/jquery-3.6.3.min.js"></script>
</body>

</html>