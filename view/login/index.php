<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="icon" href="<?php echo constant('URL'); ?>public/img/icono.png">
    <link  rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/Main.css">
    <link  rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/login.css">
    <title>LOGIN</title>
</head>
<body>

    <div class="login">
        <div class="container">
            <a class="img" href="<?php echo constant('URL'); ?>main"><img src="<?php echo constant('URL'); ?>public/img/icono.png">Mundo Nuevo</a>
            <form class="form" action="<?php echo constant('URL'); ?>login/ingresar" method="POST">
                <input class="form-input" type="email" placeholder="Correo Institucional" name="email">
                <input class="form-input" type="password" placeholder="Contraseña" name="pass">
                <input class="form-input button" type="submit" value="Ingresar">
            </form>
            <p>Olvidaste tu contraseña</p>
        </div>
    </div>


</body>
</html>