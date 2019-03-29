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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FontAwosome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/regular.css" integrity="sha384-IG162Tfx2WTn//TRUi9ahZHsz47lNKzYOp0b6Vv8qltVlPkub2yj9TVwzNck6GEF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
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
                <a href="index.php"><i class="fas fa-home" aria-hidden="true"></i>Inicio</a>
                <a href="index.php?contenido=pages/estudiantes/estudiantes.php"><i class="fas fa-code" aria-hidden="true"></i>Estudiantes</a>
                <a href="index.php?contenido=pages/convocatoria/convocatoria.php"><i class="fas fa-code" aria-hidden="true"></i>Convocatoria</a>
                <a href="index.php?contenido=pages/preguntas/preguntas.php"><i class="fas fa-code" aria-hidden="true"></i>Preguntas</a>
                <a href="index.php?contenido=pages/examenes/prueba_html.php"><i class="fas fa-code" aria-hidden="true"></i>HTML</a>
                <a href="index.php?contenido=pages/examenes/prueba_java.php"><i class="fas fa-code" aria-hidden="true"></i>JAVA</a>
                <a href="index.php?contenido=pages/examenes/prueba_php.php"><i class="fas fa-code" aria-hidden="true"></i>PHP</a>
                <a href="index.php?contenido=pages/login.php"><i class="fas fa-code" aria-hidden="true"></i>Iniciar Session</a>
            </div>
        </nav>
        <div class="div_rojo"></div>
    </header>

    <main>
        <article>
            <?php
            
            if (isset($_GET['contenido'])) {
                $contenido = $_GET['contenido'];
                include ($contenido);
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
    
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="public/js/headroom.min.js"></script>
    <script src="public/js/menu.js"></script>
    <script src="public/js/set-datos.js"></script>
    
</body>
</html>