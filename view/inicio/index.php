<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Nuevo</title>
    <link  rel="icon" href="../../public/img/icono.png">
    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssnormalize/cssnormalize-min.css">
    <!-- Fin de Normalize -->
    <link rel="stylesheet" type="text/css" href="../../public/css/main.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/panel.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/about.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/proyects.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/sponsor.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@300&display=swap" rel="stylesheet">
    <script defer src="../../public/js/app.js"></script>
    <script src="https://kit.fontawesome.com/019b17adfa.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- nav bar -->
    <header class="topheader">
        <nav class="nav">
            <a class="logo">
                <img src="../../public/img/icono.png" alt="Sistema Academico">
                <div>
                    Mundo Nuevo<br>
                    <span>Institución</span>
                </div>
            </a>
            <button class="nav-open" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="nav-menu ">
                <button class="nav-close" aria-label="Cerrar menú">
                    <i class="fa-solid fa-x"></i>
                </button>
                <li class="nav-menu-item"><a class="nav-menu-link activate" href="#panel">Inicio</a></li>
                <li class="nav-menu-item"><a class="nav-menu-link" href="#about">Nosotros</a></li>
                <li class="nav-menu-item"><a class="nav-menu-link" href="#proyects">Proyectos</a></li>
                <!-- <li class="nav-menu-item"><a class="nav-menu-link" href="#sponsor">Gerentes</a></li> -->
                <li class="nav-menu-item"><a class="nav-menu-link" href="#contacto">Contacto</a></li>
                <li class="nav-menu-item"><a class="nav-menu-link fijo" href="#">Login</a></li>
                
            </ul>
        </nav>
    </header>

    <!-- presentation -->

    <div id="panel">
        <h1>Bienvenidos a Mundo Nuevo</h1>
        <hr>
        <p>Institución Educativa</p>
        <a class="button" href="#sponsor">Ver abajo</a>
    </div>

    <!-- about us -->

    <div id="about">
        <div class="container">
            <h2>Acerca de Nosotros</h2>
            <p>
                La misión de Mundo Nuevo es promover el conocimiento y educar a los estudiantes en ciencia, tecnología
                y otras áreas académicas que sirvan mejor a la nación y al mundo en el siglo XXI.
                El Instituto está comprometido a generar, difundir y preservar el conocimiento, y a trabajar con otros
                para llevar este conocimiento a los grandes desafíos del mundo. Mundo Nuevo se dedica a brindar a sus estudiantes una
                educación que combine un estudio académico riguroso y la emoción del descubrimiento con el apoyo y la estimulación
                intelectual de una comunidad universitaria diversa. Buscamos desarrollar en cada miembro de la comunidad de Mundo Nuevo la
                capacidad y la pasión para trabajar de manera inteligente, creativa y eficaz para el mejoramiento de la humanidad.
            </p>

            <div class="wrap">
                <div class="img-container">
                    <img src="../../public/img/student1.jpg">
                    <div class="img-container-line"></div>
                </div>
                <div class="img-container">
                    <img src="../../public/img/student2.jpg">
                    <div class="img-container-line"></div>
                </div>
                <div class="img-container">
                    <img src="../../public/img/student3.jpg">
                    <div class="img-container-line"></div>
            </div>
        </div>
    </div>

    </div>

    <!-- Proyects -->

    <div id="proyects">
        <div class="container">
            <h2>Nuestros Proyectos</h2>

            <div class="carta-grid">
                <div class="empty">
                    <img src="../../public/img/pro1.jpeg">
                </div>
                <div class="line"></div>
                <div class="carta">
                    <div class="carta-Titulo imagen1">
                        GATO ROBOTICO
                        <button class="cart-open">+ Info</button>
                        <div class="carta-Descrip ">
                            Creado con codigó C++ y Python. Construido sobre una plataforma de 
                            código abierto, Nybble tiene infinitas posibilidades en la forma en
                            que puede "enseñar" trucos, comportamientos y CAT-itude a medida que 
                            lo programa y lo ayuda a crecer. ¡Incluso puede montar una Raspberry
                            Pi para ayudar a Nybble a pensar! 
                        </div>
                    </div>
                </div>
                <div class="carta">
                    <div class="carta-Titulo imagen2">
                        BRAZO BIONICO
                        <button class="cart-open2">+ Info</button>
                        <div class="carta-Descrip2">
                            Otro desarrollo prometedor lo están probando en la Universidad
                            Johns Hopkins. Uno de sus laboratorios ha creado un brazo robótico 
                            de nueva generación conectado al tronco por 26 puntos y capaz de 
                            levantar hasta 20 kilogramos de peso. Pero lo más destacado es que 
                            para controlarlo basta pensar en moverlo como si fuera un brazo de carne y hueso.
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="empty"><img src="../../public/img/pro2.jpg"></div>
                <div class="empty"><img src="../../public/img/pro3.jpg"></div>
                <div class="line"></div>
                <div class="carta">
                    <div class="carta-Titulo imagen3">
                        UDRONE
                        <button class="cart-open3">+ Info</button>
                        <div class="carta-Descrip3">
                            Deseche sus controladores y teléfonos, ¡hay una nueva 
                            forma de volar un dron! ¡Esta semana, desempacamos el 
                            increíble dron controlado por la mente UDrone!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- sponsorship -->

    <section id="sponsor">
        
        <div class="container">
            <h2>Gerentes</h2>

            <section class="wrap">
                <article class="spoShip">
                    <div class="imagen Uno">
                        <div class="info">
                            <h3>Laurie Bream</h3>
                            <p>
                                Socia Gerente
                            </p>         
                        </div>
                    </div>
                    <div class="nota">
                        <div class="caja2">
                            <h3>Laurie Bream</h3>
                            <p>
                                Socia Gerente
                            </p> 
                        </div>        
                    </div>
                    
                </article>
    
                <article class="spoShip">
                    <div class="imagen Dos">
                        <div class="info">
                            <h3>Gavin Belson </h3>
                            <p>
                                Jefe de Innovación
                            </p>
                        </div>
                    </div>
                    <div class="nota">
                        <h3>Gavin Belson </h3>
                        <p>
                            Jefe de Innovación
                        </p>
                    </div>
                </article>
    
                <article class="spoShip">
                    <div class="imagen Tres">
                        <div class="info">
                            <h3>Peter Gregory</h3>
                            <p>
                                Inventor de Innovación
                            </p>
                        </div>
                    </div>
                    <div class="nota">
                        <div class="caja2">
                            <h3>Peter Gregory</h3>
                            <p>
                                Inventor de Innovación
                            </p>
                        </div>
                    </div>
                </article>
            </section>


        </div>

    </section>

    <section id="contacto">
        <div class="container">
            <h3>No dudes en enviar un comentario, si tienes alguna mejora para nuestra pagina o deseas contactarnos</h3>
            <form class="form" method="POST" action="correo.php">
                <div class="prueba">
                    <div class="form-section">
                        <input type="text" class="form-input" placeholder="Nombre" name="txtNombre" required>
                    </div>
                    <div class="form-section">
                        <input type="email" class="form-input" placeholder="Correo" name="txtCorreo" required>
                    </div>
                </div>
                <div class="form-section">
                    <input class="form-input" placeholder="Asunto" name="txtAsunto" required>
                </div>
                
                <div class="form-section">
                    <textarea class="form-input area" placeholder="Comentario" name="txtArea" required></textarea>
                </div>
                <div class="form-section">
                    <input type="submit" class="form-button" value="Enviar">
                </div>
            </form> 
        </div>       
    </section>

    <!-- page pie -->
    <footer id="footer">
        <div class="container">
            <a class="logo-footer" href="#panel">
                <div>
                    Mundo Nuevo<br>
                    <span>Institución</span>
                </div>
                <img src="../../public/img/icono.png" alt="Sistema Academico">
            </a>
            <b class="uno">&copy; 2022/06/16 Copyright | Diana Vargas Elescano </b>
            <b>Facebook |  Instagram | Twitter</b>
        </div>
    </footer>
</body>
</html>