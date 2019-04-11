<?php
require_once('./controllers/RespuestasController.php');
require_once('./controllers/EstudianteController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$respuestasController3 = new RespuestasController();
//Llenado del arreglo
if (isset($_GET['id_estudiante'])) {
    $respuestasAbiertas= $respuestasController3->valoracionRespuestas($_GET['id_estudiante']);
}

if (isset($_POST['btn_valorar'])) {
    $arregloRespuestas = [$_POST['valoracion1'],$_POST['valoracion2'],$_POST['valoracion3'],$_POST['valoracion4'],$_POST['valoracion5']];
    $arregloId = [$_POST['id_respuesta1'],$_POST['id_respuesta2'],$_POST['id_respuesta3'],$_POST['id_respuesta4'],$_POST['id_respuesta5']];
    var_dump($arregloRespuestas);
    var_dump($arregloId);
    for ($i=0; $i <5 ; $i++) { 
        $respuestasController3->valoracionUpdate($arregloId[$i],$arregloRespuestas[$i]);
    }
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
    <th >Pregunta</th>
    <th>respuesta</th>
    <th>Valoración</th>
</tr>";
for ($i=0; $i <count($respuestasAbiertas) ; $i++) { 

echo "
<tr>
<input type=\"hidden\" name=\"id_respuesta".($i+1)."\" value=\" " .$respuestasAbiertas[$i]['id_respuesta']. "\">
<td class='cont_questions'>". $respuestasAbiertas[$i]['titulo'] ."</td>
<td>". $respuestasAbiertas[$i]['respuesta'] ."</td>
<td class='content_center'> 
<select name=\"valoracion".($i+1)."\">
<option value=\"1\">1</option>
<option value=\"2\">2</option>
<option value=\"3\">3</option>
<option value=\"4\">4</option>
<option value=\"5\">5</option>
</select> </td>
</tr>";
}
echo "</table>
</div>
";
?>
<br/>
<button type="submit" class="btn btn-primary" name="btn_valorar">Valorar</button>
</form>
    
</body>
</html>