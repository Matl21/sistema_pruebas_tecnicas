<?php
require_once('./controllers/RespuestasController.php');
require_once('./controllers/EstudianteController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$respuestasController3 = new RespuestasController();
//Llenado del arreglo
if (isset($_GET['id_estudiante'])) {
    $respuestasAbiertas= $respuestasController3->revisarValoraciones($_GET['id_estudiante']);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valoración de respuestas</title>
    <style>
    .cont_questions{
        width: 50%;
    }
    </style>
</head>
<body>
<h4>Valoración de respuestas</h4>
<hr/>

<form method="post">
<?php
//Tabla de clase 
echo "<div class=\"table-responsive-md\">
<table class=\"table table-sm table-bordered table-striped table-hover table_mant\">
<tr>
    <th class='content_center' >Pregunta</th>
    <th class='content_center' >Valoración</th>
</tr>";
for ($i=0; $i <count($respuestasAbiertas) ; $i++) { 

echo "
<tr>
<input type=\"hidden\" name=\"id_respuesta".($i+1)."\" value=\" " .$respuestasAbiertas[$i]['id_respuesta']. "\">
<td class='cont_questions'>". $respuestasAbiertas[$i]['titulo'] ."</td>
<td class='content_center'>". $respuestasAbiertas[$i]['valoracion'] ."</td>
</tr>";
}
echo "</table>
</div>
";
?>
<br/>
<button type="button" name="btn_regresar" class="btn btn-danger"
                        onclick="window.location.href='index.php?contenido=pages/examenes/seleccion.php'">Regresar
                        <i class="fas fa-share-square"></i></button>
</form>
    
</body>
</html>