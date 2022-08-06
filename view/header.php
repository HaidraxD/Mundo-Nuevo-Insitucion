<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/019b17adfa.js" crossorigin="anonymous"></script>
    <link  rel="stylesheet" href="<?php echo constant('URL')?>public/css/otro.css">
    <link  rel="stylesheet" href="<?php echo constant('URL')?>public/css/Main.css">
    <script defer src="<?php echo constant('URL'); ?>public/js/app2.js"></script>
</head>
<body>
    
    <div class="sidemenu" >
        <!-- HEADER -->
        <div id="header">
            <div id="title">
                <img src="<?php echo constant('URL'); ?>public/img/icono.png" alt="Mundo Nuevo Institución">
                <div>
                    <span>MUNDO NUEVO</span>
                    <hr>
                    <span>BLACKBOARD</span>     
                </div>
            </div>
        </div>
        
        <!-- ITEMS -->
        <div id="menu-items">
            <div class="item">
                <a href="#">
                    <div class="icon"><i class="fa-solid fa-user"></i></div>
                    <div class="title">Nombre de Alumno</div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="icon"><i class="fa-solid fa-globe"></i></i></div>
                    <div class="title">Flujo de Actividades</div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="icon"><i class="fa-solid fa-book"></i></i></div>
                    <div class="title">Cursos</div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="icon"><i class="fa-solid fa-file-pen"></i></div>
                    <div class="title">Calificaciones</div>
                </a>
            </div>
            <div class="item down">
                <a href="#">
                    <div class="icon"><i class="fa-solid fa-circle-left"></i></div>
                    <div class="title">Cerrar Sesión</div>
                </a>
            </div>
            
        </div>
    </div>

    <div id="top-menu">
        <div class="icon">
            <div id="menu-btn">
                <div id="btn-hamburger"></div>
                <div id="btn-hamburger"></div>
                <div id="btn-hamburger"></div>
            </div>
        </div>
        <div class="title">
            <h3>CURSOS</h3>
        </div>
    </div>

</body>
</html>