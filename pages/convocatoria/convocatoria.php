<?php
require_once('./controllers/ConvocatoriaController.php');
require_once('./class/EntityArray.php');

//Instacia de la clase controlador
$convocatoriaController = new ConvocatoriaController();
//Llenado del arreglo
$convocatoria= $convocatoriaController->read();
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
<h3>Mantenimiento a Convocatoria</h3>
<hr>

<!-- Boton de nuevo registro -->
<button type="button" class="btn btn-primary" onclick="window.location.href='index.php?contenido=pages/convocatoria/convocatoriaAdd.php'">
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
    <th>Nombre</th>
    <th>Descripcion</th>
    <th colspan='2'>Acciones</th>
</tr>";
for ($i=0; $i <count($convocatoria) ; $i++) { 
echo "
<tr>
<td name='id_convocatoria'>". $convocatoria[$i]['id_convocatoria'] ."</td>
<td>". $convocatoria[$i]['nombre'] ."</td>
<td>". $convocatoria[$i]['descripcion'] ."</td>
<td> 
<input type=\"hidden\" name=\"r\" value=\"convocatoria-editar\">
<button type=\"button\" class=\"btn btn-warning\" name=\"btn_tb_editar\" onclick=\"window.location.href='index.php?contenido=pages/convocatoria/convocatoriaUpdate.php&id=".$convocatoria[$i]['id_convocatoria']."'\" ><i class=\"fas fa-edit\"></i></button>
</td>
<td> 
<input type=\"hidden\" name=\"r\" value=\"convocatoria-eliminar\">
<a class=\"btn btn-danger\" name=\"btn_tb_eliminar\" onclick=\"javascript:return confirm('¿Seguro de eliminar este registro?');\" href='index.php?contenido=pages/convocatoria/convocatoriaDelete.php&id=".$convocatoria[$i]['id_convocatoria']."' ><i class=\"fas fa-trash-alt\"></i></button> </a>
</td> 
</tr>";
}
echo "</table>
";


?>
</body>
</html>