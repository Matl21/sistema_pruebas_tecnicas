<?php
require_once('./controllers/RespuestasController.php');
require_once('./controllers/EstudianteController.php');
require_once('./class/EntityArray.php');

//Instacia de la clase controlador
$respuestasController2 = new RespuestasController();
//Llenado del arreglo
if (isset($_GET['id_estudiante'])) {
    $respuestas= $respuestasController2->preguntasRespuestas($_GET['id_estudiante']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Respuestas</title>
    <style>
    .mitad{
        width: 40%; 
        text-align: center;
    }
    </style>
</head>
<body>
    
<?php
//Tabla de clase 
//Tabla de clase 
echo "<div class=\"table-responsive-md\">
<table class=\"table table-sm table-bordered table-striped table-hover table_mant\">
<tr>
    <th>Preguntas</th>
    <th class='mitad'>Respuesta</th>
</tr>";
for ($i=0; $i <count($respuestas) ; $i++) { 

echo "
<tr>
<td>". $respuestas[$i]['titulo'] ."</td>
<td class='mitad'>". $respuestas[$i]['respuesta'] ."</td>
</tr>";
}
echo "</table>
</div>
";
?>
<a href="./index.php" class="btn btn-primary">Aceptar</a>
<button type="button" name="btn_regresar" class="btn btn-danger"
                        onclick="window.location.href='index.php?contenido=pages/examenes/seleccion.php'">Regresar
                        <i class="fas fa-share-square"></i></button>
</body>
</html>