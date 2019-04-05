<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pruebas Técnicas</title>
    
    <!-- Icono del proyecto --->
    <link rel="shortcut icon" type="image/png" href="public/img/icons/quiz.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <!-- FontAwosome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <link rel="stylesheet" href="public/css/animate.css">
    <!-- Original Estilo-->
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/content.css">
    <!-- CSS Examenes-->
    <link rel="stylesheet" href="public/css/examenes.css">
    <!-- CSS Mantenimientos del CRUD-->
    <link rel="stylesheet" href="public/css/mantenimientos.css">

    
</head>
<body>
    <header id="header">
        <nav class="menu">
            <div class="logo_usaid">
                <a href="https://www.facebook.com/CDSSAFGK/"><img src="public/img/logo/usaid.png" alt=""></a>
                <a href="#" class="btn-menu" id="btn-menu"><i class="icono fa fa-bars" aria-hidden="true"></i></a>
            </div>
            <div class="enlaces" id="enlaces">
                <ul class="ul_enlaces">
                    <li><a href="index.php?contenido=pages/home.php"><i class="fas fa-home" aria-hidden="true"></i>Inicio</a></li>
                    <li>Mantenimientos
                        <ul class="submenu">
                            <li><a href="index.php?contenido=pages/estudiantes/estudiantes.php"><i class="fas fa-code" aria-hidden="true"></i> Estudiantes</a></li>
                            <li><a href="index.php?contenido=pages/convocatoria/convocatoria.php"><i class="fas fa-code" aria-hidden="true"></i> Convocatoria</a></li>
                            <li><a href="index.php?contenido=pages/rol/rol.php"><i class="fas fa-code" aria-hidden="true"></i> Rol</a></li>
                            <li><a href="index.php?contenido=pages/preguntas/preguntas.php"><i class="fas fa-code"></i> Preguntas</a></li>
                            <li><a href="index.php?contenido=pages/estudianteConvocatoria/estudianteConvocatoria.php"><i class="fas fa-code"></i> Estudiante Convocatoria</a></li>
                            <li><a href="index.php?contenido=pages/usuarios/usuarios.php"><i class="fas fa-code"></i> Usuarios</a></li>
                            <li><a href="index.php?contenido=pages/respuestas/respuestas.php"><i class="fas fa-code"></i> Respuestas</a></li>
                        </ul>
                    </li>

                    <li><a href="index.php?contenido=pages/login.php"><i class="far fa-user-circle"></i>Iniciar Session</a></li>
                </ul>
            </div>
        </nav>
        <div class="div_rojo"></div>
    </header>

    <main>
        <article>
            <?php
            $home = 'pages/home.php';
            if (isset($_GET['contenido'])) {
                $contenido = $_GET['contenido'];
                include ($contenido);
            }else{
                include($home);
            }
            
            /*
            require_once('./controllers/Autoload.php');
            $autoload = new Autoload();

            $route = isset($_GET['r'])? $_GET['r'] : 'home';
            $main = new Router($route);
            */
            ?>
        </article>
    </main>

    <footer class="footer">

        <div class="footer-left">
            <a href=""><img class="img_usaid" src="public/img/logo/usaid.png" alt=""></a>
            <br/>
            <a href=""><img class="img_fundacion" src="public/img/logo/fundacion.png" alt=""></a> 
            <br/>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i><p><span>Fundacion Gloria Krite</span> Santa Ana, El salvador</p>
            </div>
            <div>
                <i class="fa fa-phone"></i><p>+503 7000 ----</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i><p><a href="kevin.ayala@proyectosfgk.org">kevin.ayala@proyectosfgk.org</a></p>
            </div>
        </div>
    
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Acerca de Mí</span>
                Esta plantilla fue creada con fines educativos, para realizar los ejercicios del centro de desarrollo de software en la Fundación Gloria Krite.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/in/kevin-mart%C3%ADnez-b908b6161/"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/kkevin7"><i class="fab fa-github"></i></a>
            </div>
        </div>
    
    </footer>
    <!--
    <div class="div_derechos">
            <label class="label_copyright">
                &copy;
                <script type="text/javascript">
                    var year = new Date();
                    document.write(year.getFullYear());
                </script>
            </label>
            Copyright:
            <a href='https://www.linkedin.com/in/kevin-mart%C3%ADnez-b908b6161/' class="a_creador">Kevin Vicente
                Martinez Ayala</a>
        </div>
        -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="public/js/menu.js"></script>
    <script src="public/js/set-datos.js"></script>
    
</body>
</html>