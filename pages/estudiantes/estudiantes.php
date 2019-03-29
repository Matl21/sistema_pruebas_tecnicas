<?php
require_once('./controllers/EstudianteController.php');
require_once('./class/EntityArray.php');

//Instacia de la clase controlador
$estudianteController = new EstudianteController();
//Llenado del arreglo
$estudientes= $estudianteController->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenimiento Estudiantes</title>
    
</head>
<body>

<h3>Mantenimiento a Estudiantes</h3>
<hr>

<!-- Boton de nuevo registro -->
<button type="button" class="btn btn-primary" onclick="window.location.href='index.php?contenido=pages/estudiantes/estudiantesAdd.php'">
Nuevo Registro
<i class="fas fa-pen"></i>
</button>
<br/><br/>

<?php
//Tabla de clase 
echo "<div class=\"table-responsive-md\">
<table class=\"table table-sm table-bordered table-striped table-hover table_mant\">
<tr>
    <th class='th_mant'>id</th>
    <th class='th_mant'>Nombre</th>
    <th class='th_mant'>Apellidos</th>
    <th class='th_mant'>Email</th>
    <th class='th_mant'>Sexo</th>
    <th class='th_mant'>Fecha Nacimiento</th>
    <th class='th_mant'>Foto</th>
    <th class='th_mant'>Activo</th>
    <th class='th_mant' colspan='2' class=\"th_text\">Acciones</th>
</tr>";
for ($i=0; $i <count($estudientes) ; $i++) { 
echo "
<tr>
<td name='id_estudiante'>". $estudientes[$i]['id_estudiante'] ."</td>
<td>". $estudientes[$i]['nombre'] ."</td>
<td>". $estudientes[$i]['apellido'] ."</td>
<td>". $estudientes[$i]['email'] ."</td>
<td>". $estudientes[$i]['sexo'] ."</td>
<td>". $estudientes[$i]['fecha_nacimiento'] ."</td>
<td>". $estudientes[$i]['foto_url'] ."</td>
<td>". $estudientes[$i]['activo'] ."</td>
<td> 
<button type=\"button\" class=\"btn btn-warning\" name=\"btn_tb_editar\" onclick=\"window.location.href='index.php?contenido=pages/estudiantes/estudiantesUpdate.php&id=".$estudientes[$i]['id_estudiante']."'\" ><i class=\"fas fa-edit\"></i></button> 
</td>
<td> 
<a class=\"btn btn-danger\" name=\"btn_tb_eliminar\" onclick=\"javascript:return confirm('¿Seguro de eliminar este registro?');\" href='index.php?contenido=pages/estudiantes/estudiantesDelete.php&id=".$estudientes[$i]['id_estudiante']."' ><i class=\"fas fa-trash-alt\"></i></button> </a>
</tr>";
}
echo "</table>
</div>";

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::estudianteArray(null,$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Insertar un registro
  $estudianteController->create($arreglo);
  //Llenado del arreglo
}



if (isset($_POST['btn_eliminar'])) { 
  //Borrar registro de la base de datos
  echo "El valor de id es: ".$_POST['id_modal_estudiante'];
  //$estudianteController->delete($_POST['id_estudiante']);
  //Llenado del arreglo
}

?>

</body>
</html>