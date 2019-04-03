<?php
require_once('./controllers/RolController.php');
require_once('./class/EntityArray.php');
//Instacia de la clase controlador
$rolController = new RolController();

//Llenado del arreglo
$rol= $rolController->read();
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

<h3>Mantenimiento a Rol</h3>
<hr>

<!-- Boton de nuevo registro -->
<button type="button" class="btn btn-primary" onclick="window.location.href='index.php?contenido=pages/rol/rolAdd.php'">
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
    <th>Descripción</th>
    
    <th colspan='2'>Acciones</th>
</tr>";
for ($i=0; $i <count($rol) ; $i++) { 
echo "
<tr>
<td name='id_rol'>". $rol[$i]['id_rol'] ."</td>
<td>". $rol[$i]['nombre'] ."</td>
<td>". $rol[$i]['descripcion'] ."</td>

<td> 
<input type=\"hidden\" name=\"r\" value=\"rol-editar\">
<button type=\"button\" class=\"btn btn-warning\" name=\"btn_tb_editar\" onclick=\"window.location.href='index.php?contenido=pages/rol/rolUpdate.php&id=".$rol[$i]['id_rol']."'\" ><i class=\"fas fa-edit\"></i></button>
</td>
<td> 
<input type=\"hidden\" name=\"r\" value=\"rol-eliminar\">
<a class=\"btn btn-danger\" name=\"btn_tb_eliminar\" onclick=\"javascript:return confirm('¿Seguro de eliminar este registro?');\" href='index.php?contenido=pages/rol/rolDelete.php&id=".$rol[$i]['id_rol']."' ><i class=\"fas fa-trash-alt\"></i></button> </a>
</td> 
</tr>";
}
echo "</table>
";

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::rolArray(null,$_POST['nombre'],$_POST['descripcion'],null,true);
  //Insertar un registro
  $rolController->create($arreglo);
}

if (isset($_POST['btn_editar'])) {  
  echo "Le diste al boton editar<br/>";
  echo "El valor de id es: ".$_POST['id_rol'];
  //Conversion de los datos a arreglo
  //$arreglo= EntityArray::rolArray($_POST['id_estudiante'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Editar un registro
  //$rolController->update($arreglo);
  //Llenado del arreglo
  $rol= $rolController->read();
}

if (isset($_POST['btn_eliminar'])) { 
  //Borrar registro de la base de datos
  $rolController->delete($_POST['id_rol']);
  //Llenado del arreglo
  $rol= $rolController->read();
}



//$status->create($new_status);
//$estudianteModel->create($new_status);
//$estudianteModel->update($new_status);
?>
</body>
</html>