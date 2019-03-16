<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    
    <!-- Bootstrap CSS -->
    <!--
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    --> 
    <!-- FontAwosome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/regular.css" integrity="sha384-IG162Tfx2WTn//TRUi9ahZHsz47lNKzYOp0b6Vv8qltVlPkub2yj9TVwzNck6GEF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
    <!-- Original Estilo-->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <header id="header">
        <nav class="menu">
            <div class="logo_usaid">
                <a href="https://www.facebook.com/CDSSAFGK/"><img src="img/logo/usaid.png" alt=""></a>
                <a href="#" class="btn-menu" id="btn-menu"><i class="icono fa fa-bars" aria-hidden="true"></i></a>
            </div>
            <div class="enlaces" id="enlaces">
                <a href="index.php"><i class="fas fa-home" aria-hidden="true"></i>Inicio</a>
                <a href="index.php?contenido=pages/prueba_mvc.php"><i class="fas fa-code" aria-hidden="true"></i>MVC</a>
                <a href="index.php?contenido=pages/prueba_xamarin.php"><i class="fas fa-code" aria-hidden="true"></i>Xamarin</a>
                <a href="index.php?contenido=pages/prueba_html.php"><i class="fas fa-code" aria-hidden="true"></i>HTML</a>
                <a href="index.php?contenido=pages/prueba_tester.php"><i class="fas fa-code" aria-hidden="true"></i>Tester</a>
                <a href="index.php?contenido=pages/prueba_java.php"><i class="fas fa-code" aria-hidden="true"></i>JAVA</a>
                <a href="index.php?contenido=pages/prueba_php.php"><i class="fas fa-code" aria-hidden="true"></i>PHP</a>
            </div>
        </nav>
        <div class="div_rojo"></div>
    </header>

    <main>
        <article>
            <h1>Ejercicios de PHP</h1>
            <hr>
            <?php
            if (isset($_GET['contenido'])) {
                $contenido = $_GET['contenido'];
                include ($contenido);
            }
            ?>
        </article>
    </main>

    <footer class="footer">

        <div class="footer-left">
            <a href=""><img class="img_usaid" src="img/logo/usaid.png" alt=""></a>
            <br/>
            <a href=""><img class="img_fundacion" src="img/logo/fundacion.png" alt=""></a> 
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/headroom.min.js"></script>
    <script src="js/menu.js"></script>

</body>
</html>