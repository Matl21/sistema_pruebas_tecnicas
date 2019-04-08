<!doctype html>
<html lang="es">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS login-->
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
<form method="post">
    <div class="modal-dialog text-center animated zoomIn">
        <div class="col-sm-10 main-section">
            <div class="modal-content">
                <div class="col-12 user_img">
                    <img src="public/img/avatars/hombre.svg" alt="">
                </div>
                <form action="" class="col-12">
                    <div class="form-group">
                        <h3>Inicio de Sessión</h3>
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" name="user" class="form-control" placeholder="Nombre de Usuario" aria-describedby="helpId" required>
                    </div>
                    <div class="form-group" id="password-group">
                        <input type="password" name="pass" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" 11 class="btn btn-primary button_login"><i class="fas fa-sign-in-alt "></i> Ingresar</button>
                        <button type="button" class="btn btn-primary button_login"><i class="fas fa-pencil-alt    "></i> Registrarse</button>
                    </div>
                </form>
                <div class="col-12 forgot">
                    <a href="" class="no_subraya">¿Olvidates tu consetraseña?</a>
                </div>
            </div>
        </div>
    </div>
</form>
<?php  
if (isset($_GET['error'])) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">
    <p>".$_GET['error']."</p>
  </div>";
}
?>

</body>

</html>