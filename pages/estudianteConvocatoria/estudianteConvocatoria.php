<?php
require_once('./controllers/EstudianteConvocatoriaController.php');
require_once('./class/EntityArray.php');

//Instacia de la clase controlador
$estudianteConvocatoriaController = new EstudianteConvocatoriaController();
//Llenado del arreglo
$estudienteConvocatoria= $estudianteConvocatoriaController->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiante Convocatoria</title>
</head>
<body>
<h3>Mantenimiento a Estudiantes-Convocatoria</h3>
<hr>

<!-- Boton de nuevo registro -->
<button type="button" class="btn btn-primary" onclick="window.location.href='index.php?contenido=pages/estudianteConvocatoria/estudianteConvocatoriaAdd.php'">
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
    <th>convocatoria</th>
    <th>estudiante</th>
    <th>municipio</th>
    <th>lugar</th>
    
    <th colspan='2'>Acciones</th>
</tr>";
for ($i=0; $i <count($estudienteConvocatoria) ; $i++) { 
echo "
<tr>
<td name='id_estudiante_convocatoria'>". $estudienteConvocatoria[$i]['id_estudiante_convocatoria'] ."</td>
<td>". $estudienteConvocatoria[$i]['convocatoria'] ."</td>
<td>". $estudienteConvocatoria[$i]['participante'] ."</td>
<td>". $estudienteConvocatoria[$i]['municipio'] ."</td>
<td>". $estudienteConvocatoria[$i]['lugar'] ."</td>

<td> 
<input type=\"hidden\" name=\"r\" value=\"estudiante-convocatoria-editar\">
<button type=\"button\" class=\"btn btn-warning\" name=\"btn_tb_editar\" onclick=\"window.location.href='index.php?contenido=pages/estudianteConvocatoria/estudianteConvocatoriaUpdate.php&id=".$estudienteConvocatoria[$i]['id_estudiante_convocatoria']."'\" ><i class=\"fas fa-edit\"></i></button>
</td>
<td> 
<input type=\"hidden\" name=\"r\" value=\"estudiante-convocatoria-eliminar\">
<a class=\"btn btn-danger\" name=\"btn_tb_eliminar\" onclick=\"javascript:return confirm('¿Seguro de eliminar este registro?');\" href='index.php?contenido=pages/estudianteConvocatoria/estudianteConvocatoriaDelete.php&id=".$estudienteConvocatoria[$i]['id_estudiante_convocatoria']."' ><i class=\"fas fa-trash-alt\"></i></button> </a>
</td> 
</tr>";
}
echo "</table>
</div>
";


if (isset($_POST['btn_editar'])) {  
  echo "Le diste al boton editar<br/>";
  echo "El valor de id es: ".$_POST['id_estudianteconvocatoria'];
  //Conversion de los datos a arreglo
  //$arreglo= EntityArray::estudianteArray($_POST['id_estudiante'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Editar un registro
  //$estudianteController->update($arreglo);
  //Llenado del arreglo
  $estudienteconvocatoria= $estudianteconvocatoriaController->read();
}


?>
</body>
</html>