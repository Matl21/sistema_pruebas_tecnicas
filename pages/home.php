<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="public/css/home.css" />
</head>
<body>
    <h3>Menú Principal del Sistema</h3>
    <hr>

    <div class="container cont_center">
                <ul class="ca-menu">
                    <li class="exam">
                        <a href="index.php?contenido=pages/examenes/seleccion.php">
                            <span class="ca-icon"><i class="fas fa-pen-nib"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Exámenes</h2>
                                <h3 class="ca-sub">Realizar un exámen para algún estudiante</h3>
                            </div>
                        </a>
                    </li>
                    <li class="registrarEstudiante">
                        <a href="index.php?contenido=pages/estudiantes/registrarEstudiante.php">
                            <span class="ca-icon"><i class="fas fa-address-card"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Registrar Estudiantes</h2>
                            </div>
                        </a>
                    </li>
                    <li class="reportes">
                        <a href="index.php?contenido=pages/reportes/mostrarReportes.php">
                            <span class="ca-icon"><i class="fas fa-print"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Reportes</h2>
                                <h3 class="ca-sub">Generar reportes de estudiantes</h3>
                            </div>
                        </a>
                    </li>
                    <h3>Mantenimientos</h3>
                    <hr>

                    <li class="convocatoria">
                        <a href="index.php?contenido=pages/convocatoria/convocatoria.php">
                            <span class="ca-icon"><i class="fas fa-bullhorn"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Convocatoria</h2>
                                <h3 class="ca-sub">Muestra las convocatoria existentes</h3>
                            </div>
                        </a>
                    </li>
                    <li class="preguntas">
                        <a href="index.php?contenido=pages/preguntas/preguntas.php">
                            <span class="ca-icon" id="heart"><i class="fas fa-question"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Preguntas</h2>
                                <h3 class="ca-sub">Checkear las preguntas de las convocatorias</h3>
                            </div>
                        </a>
                    </li>
                    <li class="estudiantes">
                        <a href="index.php?contenido=pages/estudiantes/estudiantes.php">
                            <span class="ca-icon"><i class="fas fa-book-open"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Estudiantes</h2>
                                <h3 class="ca-sub">Muestra las respuestas de los participantes</h3>
                            </div>
                        </a>
                    </li>
                    
                    <li class="usuarios">
                        <a href="index.php?contenido=pages/usuarios/usuarios.php">
                            <span class="ca-icon"><i class="fas fa-users"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Usuarios</h2>
                                <h3 class="ca-sub">Administración de usuarios</h3>
                            </div>
                        </a>
                    </li>
                    <li class="respuestas">
                        <a href="index.php?contenido=pages/respuestas/respuestas.php">
                            <span class="ca-icon"><i class="fas fa-edit"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Respuestas</h2>
                                <h3 class="ca-sub">Examinar respuestas de estudiantes</h3>
                            </div>
                        </a>
                    </li>
                    <li class="estudiante_convocatoria">
                        <a href="index.php?contenido=pages/estudianteConvocatoria/estudianteConvocatoria.php">
                            <span class="ca-icon"><i class="fas fa-users-cog"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Estudiantes por Convocatoria</h2>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
</body>
</html>