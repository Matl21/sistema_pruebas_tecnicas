<?php
require_once('./controllers/RespuestasController.php');
require_once('./controllers/EstudianteController.php');
require_once('./class/EntityArray.php');

//Instacia de la clase controlador
$respuestasController = new RespuestasController();
$estudianteController = new EstudianteController();
//Llenado del arreglo
$respuestas= $respuestasController->read();
$estudiantes = $estudianteController->read();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h3>Mantenimiento a Respuestas</h3>
    <hr>

    <!-- Boton de nuevo registro -->
    <button type="button" class="btn btn-primary"
        onclick="window.location.href='index.php?contenido=pages/respuestas/respuestasAdd.php'">
        Nuevo Registro
        <i class="fas fa-pen"></i>
    </button>
    <br /><br />

    <?php
//Tabla de clase 
echo "<div class=\"table-responsive-md\">
<table class=\"table table-sm table-bordered table-striped table-hover table_mant\">
<tr>
    <th>id respuesta</th>
    <th>Pregunta</th>
    <th>Estudiante</th>
    <th>Respuesta</th>
    <th>Fecha</th>
    <th>Tipo pregunta</th>
    <th>valoracion</th>
    <th>Revisión</th>
    <th colspan='2'>Acciones</th>
</tr>";
for ($i=0; $i <count($respuestas) ; $i++) { 

  $val=null;
  if ($respuestas[$i]['abierta'] == 0) {
    $val = "Cerrada";
  }
  else{
    $val= "Abierta";
  }
  $rev=null;
  if ($respuestas[$i]['revision']==0) {
    $rev="No";
  }else{
    $rev="Si";
  }
echo "
<tr>
<td name='id_respuesta'>". $respuestas[$i]['id_respuesta'] ."</td>
<td>". $respuestas[$i]['titulo'] ."</td>
<td>". $respuestas[$i]['participante'] ."</td>
<td>". $respuestas[$i]['respuesta'] ."</td>
<td>". $respuestas[$i]['fecha'] ."</td>
<td>". $val ."</td>
<td>". $respuestas[$i]['valoracion'] ."</td>
<td>". $rev ."</td>
<td> 
<input type=\"hidden\" name=\"r\" value=\"convocatoria-editar\">
<button type=\"button\" class=\"btn btn-warning\" name=\"btn_tb_editar\" onclick=\"window.location.href='index.php?contenido=pages/respuestas/respuestasUpdate.php&id=".$respuestas[$i]['id_respuesta']."'\" ><i class=\"fas fa-edit\"></i></button>
</td>
<td> 
<input type=\"hidden\" name=\"r\" value=\"convocatoria-eliminar\">
<a class=\"btn btn-danger\" name=\"btn_tb_eliminar\" onclick=\"javascript:return confirm('¿Seguro de eliminar este registro?');\" href='index.php?contenido=pages/respuestas/respuestasDelete.php&id=".$respuestas[$i]['id_respuesta']."' ><i class=\"fas fa-trash-alt\"></i></button> </a>
</td> 
</tr>";
}
echo "</table>
</div>
";

?>
</body>

</html>