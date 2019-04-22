<?php
include_once 'controllers/UsuariosController.php';
include_once 'controllers/UserSession.php';
?>
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
    <link rel="stylesheet" href="public/css/bootstrap-4.3.1-css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <!-- FontAwosome -->
    <link rel="stylesheet" href="public/css/fontawesome-free-5.8.1-web/css/all.css" >
    
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
                <a href="https://www.facebook.com/CDSSAFGK/"><img src="public/img/logo/usaid_es.png" alt=""></a>
                <a href="#" class="btn-menu" id="btn-menu"><i class="icono fa fa-bars" aria-hidden="true"></i></a>
            </div>
            <div class="enlaces" id="enlaces">
                <ul class="ul_enlaces">
                    <li><a href="index.php?contenido=pages/home.php"><i class="fas fa-home" aria-hidden="true"></i>Inicio</a></li>
                    <!--
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
                    -->
                    <li><a href="index.php?contenido=pages/about_us.php"><i class="far fa-address-book"></i> Contactar</a></li>
                    <li><a href="index.php?contenido=pages/login.php"><i class="far fa-user-circle"></i>Iniciar Sesión</a></li>
                    <li><a href="index.php?contenido=pages/logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a></li>
                </ul>
            </div>
        </nav>
        <div class="div_rojo"></div>
    </header>

    <main>
        <article>
            <?php

            /*
            $home = 'pages/home.php';
            if (isset($_GET['contenido'])) {
                $contenido = $_GET['contenido'];
                include ($contenido);
            }else{
                include($home);
            }
            */
            $home = 'pages/home.php';
            $usuariosController = new UsuariosController();
            $userSession = new UserSession();

            if(isset($_SESSION['user'])){
                //echo "sesion iniciada";

                $usuariosController->setUser($userSession->getCurrentUser());
                echo "<label> Usuario: ",$userSession->getCurrentUser(),"</label> ";
                
                if (isset($_GET['contenido'])) {
                $contenido = $_GET['contenido'];
                include ($contenido);
                }else{
                    include($home);
                }
                
            }else if(isset($_POST['username']) && isset($_POST['password'])){
                //echo "No existe el usuario";
                $userForm = $_POST['username'];
                $passForm = $_POST['password'];

                if($usuariosController->userExists($userForm, $passForm)){
                    //echo "Existe el usuario";
                    $userSession->setCurrentUser($userForm);
                    $usuariosController->setUser($userForm);
                    
                    include_once 'pages/home.php';
                }else{
                    //echo "No existe el usuario";
                    $errorLogin = "Nombre de usuario y/o password incorrecto";
                    include_once 'pages/login.php';
                }
                
            }else{
                //echo "login";
                include_once 'pages/login.php';
            }
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
                <i class="fa fa-map-marker"></i><p><span>Fundación Gloria Kriete</span> Santa Ana, El salvador</p>
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
                Esta plantilla fue creada con fines educativos, para realizar los ejercicios del centro de desarrollo de software en la Fundación Gloria Kriete.
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

    <script src="public/js/popper.min.js" ></script>
    <script src="public/js/bootstrap-4.3.1-js/bootstrap.min.js" ></script>
    <script src="public/js/menu.js"></script>
    <script src="public/js/set-datos.js"></script>
    
</body>
</html>