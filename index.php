<!DOCTYPE html>
<!--
    Document   : index
    Created on : 20/04/2014, 08:36 pm
    Author     : jjmoncar
-->
<html lang="es">
    <head>
        <title>.::Plantilla UPTP::.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>
        <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <link href="dist/css/inicio.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header id="banner" class="text-center"><img src="src/imagenes/banner.png" alt="banner universidad"></header>
        <div class="container">
            <form class="form-signin" id="formulario" method="POST" action="controlador/logueo.php">
                <h2 class="form-signin-heading">Bienvenido!</h2>
                <input type="text" class="form-control" name="usuario" id="usuario" maxlength="12" placeholder="Usuario"
                       required autofocus autocomplete="off"><br>
                <input type="password" class="form-control" name="pass" id="pass" maxlength="12"
                       placeholder="Password" required>

                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    <span class="glyphicon glyphicon-log-in"></span> Ingresar</button>
            </form>
        </div>
        <footer id="pie" class="text-center text-info"><ul class="list-inline">
                <li>GNU/GPLv3 2014</li>
                <li> Sistema de Prueba <span class="glyphicon glyphicon-registration-mark"></span></li>
                </ul></footer>
    </body>
</html>
