<?php
require_once('./controllers/ConvocatoriaController.php');
require_once('./class/EntityArray.php');

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
<?php
echo "<h3>Mantenimiento a Convocatoria</h3>";
echo "<hr>";

//Instacia de la clase controlador
$convocatoriaController = new ConvocatoriaController();

//Llenado del arreglo
$convocatoria= $convocatoriaController->read();
?>

<form method="post">
  <div class="form-group">
    <label for="id_nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="id_nombre" placeholder="Nombre" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_descripcion">Apellido</label>
    <input type="text" class="form-control" name="descripcion" id="id_descripcion" placeholder="Descripcion" pattern="[a-zA-Z]{1,64}" required>
  </div>
 
  <button type="submit" class="btn btn-primary" name="btn_agregar">Agregar</button>
</form>
<br/>

<?php
//Tabla de clase 
echo "
<form method='post'>
<table class=\"table table-striped\">
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
<form method=\"post\">
<input type=\"hidden\" name=\"r\" value=\"convocatoria-editar\">
<input type=\"hidden\" name=\"id_convocatoria\" value='".$convocatoria[$i]['id_convocatoria']."'>
<button type=\"submit\" class=\"btn btn-warning\" name=\"btn_editar\">Editar</button> 
</form>
</td>
<form method=\"post\">
<input type=\"hidden\" name=\"r\" value=\"convocatoria-eliminar\">
<input type=\"hidden\" name=\"id_convocatoria\" value='".$convocatoria[$i]['id_convocatoria']."'>
<td> <button type=\"submit\" class=\"btn btn-danger\" name=\"btn_eliminar\">Eliminar</button> </td>
</form>
</tr>";
}
echo "</table>
</form>
";

if (isset($_POST['btn_agregar'])) {  
   
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::convocatoriaArray(null,$_POST['nombre'],$_POST['descripcion']);
  //Insertar un registro
  $convocatoriaController->create($arreglo);
  //Llenado del arreglo
  $convocatoria= $convocatoriaController->read();
}

if (isset($_POST['btn_editar'])) {  
  echo "Le diste al boton editar<br/>";
  echo "El valor de id es: ".$_POST['id_convocatoria'];
  //Conversion de los datos a arreglo
  //$arreglo= EntityArray::estudianteArray($_POST['id_estudiante'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Editar un registro
  //$estudianteController->update($arreglo);
  //Llenado del arreglo
  $convocatoria= $convocatoriaController->read();
}

if (isset($_POST['btn_eliminar'])) { 
  //Borrar registro de la base de datos
  $convocatoriaController->delete($_POST['id_convocatoria']);
  //Llenado del arreglo
  $convocatoria= $convocatoriaController->read();
}



//$status->create($new_status);
//$estudianteModel->create($new_status);
//$estudianteModel->update($new_status);
?>
</body>
</html>