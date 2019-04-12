<?php
require_once('./controllers/RespuestasController.php');
require_once('./controllers/EstudianteController.php');
require_once('./class/EntityArray.php');

//Instacia de la clase controlador
$respuestasController = new RespuestasController();
$estudianteController = new EstudianteController();
//Llenado del arreglo
$respuestas= $respuestasController->reportesRespuestas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generar reportes</title>
</head>
<body>
<h4>Generar Reporte</h4>
<hr>

<?php
//Tabla de clase 
echo "<div class=\"table-responsive-md\">
<table class=\"table table-sm table-bordered table-striped table-hover table_mant\">
<tr>
    <th class='th_mant'>Nombre</th>
    <th class='th_mant'>Apellidos</th>
    <th class='th_mant content_center'>Acciones</th>
</tr>";
for ($i=0; $i <count($respuestas) ; $i++) { 
echo "
<tr>
<td>". $respuestas[$i]['nombre'] ."</td>
<td>". $respuestas[$i]['apellido'] ."</td>
<td class='content_center'> 
<button type=\"button\" class=\"btn btn-primary \" name=\"btn_tb_editar\" onclick=\"window.location.href='pages/reportes/generarReporte.php?&id_estudiante=".$respuestas[$i]['id_estudiante']."'\" ><i class=\"fas fa-print\"></i> Generar Reporte</button> 
</td>
</tr>";
}
echo "</table>
</div>";
?>
    
</body>
</html>