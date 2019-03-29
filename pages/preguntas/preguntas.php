<?php
require_once('./controllers/PreguntasController.php');
require_once('./class/EntityArray.php');

//Instacia de la clase controlador
$preguntasController = new PreguntasController();
//Llenado del arreglo
$preguntas= $preguntasController->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenimiento Preguntas</title>
</head>
<body>

<h3>Mantenimiento a Preguntas</h3>
<hr>

<!-- Boton de nuevo registro -->
<button type="button" class="btn btn-primary" onclick="window.location.href='index.php?contenido=pages/preguntas/preguntasAdd.php'">
Nuevo Registro
<i class="fas fa-pen"></i>
</button>
<br/><br/>


<?php
//Tabla de clase 
echo "<div class=\"table-responsive-md\">
<table class=\"table table-sm table-bordered table-striped table-hover table_mant\">
<tr>
    <th>id</th>
    <th>Convocatoria</th>
    <th>Titulo</th>
    <th>Descripción</th>
    <th>Etapa</th>
    <th>Fecha Creación</th>
    <th>Activo</th>
    <th colspan='2'>Acciones</th>
</tr>";
for ($i=0; $i <count($preguntas) ; $i++) { 
echo "
<tr>
<td name='id_pregunta'>". $preguntas[$i]['id_pregunta'] ."</td>
<td>". $preguntas[$i]['id_convocatoria'] ."</td>
<td>". $preguntas[$i]['titulo'] ."</td>
<td>". $preguntas[$i]['descripcion'] ."</td>
<td>". $preguntas[$i]['etapa'] ."</td>
<td>". $preguntas[$i]['fecha_creacion'] ."</td>
<td>". $preguntas[$i]['activo'] ."</td>
<td> 
<input type=\"hidden\" name=\"r\" value=\"preguntas-editar\">
<button type=\"button\" class=\"btn btn-warning\" name=\"btn_tb_editar\" onclick=\"window.location.href='index.php?contenido=pages/preguntas/preguntasUpdate.php&id=".$preguntas[$i]['id_pregunta']."'\" ><i class=\"fas fa-edit\"></i></button>
</td>
<td> 
<input type=\"hidden\" name=\"r\" value=\"preguntas-eliminar\">
<a class=\"btn btn-danger\" name=\"btn_tb_eliminar\" onclick=\"javascript:return confirm('¿Seguro de eliminar este registro?');\" href='index.php?contenido=pages/preguntas/preguntasDelete.php&id=".$preguntas[$i]['id_pregunta']."' ><i class=\"fas fa-trash-alt\"></i></button> </a>
</td>
</tr>";
}
echo "</table>
</div>
";



?>
</body>
</html>