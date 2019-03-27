<?php
require_once('./controllers/EstudianteConvocatoriaController.php');
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
echo "<h3>Mantenimiento a Estudiantes-Convocatoria</h3>";
echo "<hr>";

//Instacia de la clase controlador
$estudianteconvocatoriaController = new EstudianteConvocatoriaController();

//Llenado del arreglo
$estudienteconvocatoria= $estudianteconvocatoriaController->read();
?>

<form method="post">
  <div class="form-group">
    <label for="id_convocatoria">Convocatoria</label>
    <input type="text" class="form-control" name="id_convocatoria" id="id_convocatoria" placeholder="id_convocatoria" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_estudiante">Estudiante</label>
    <input type="text" class="form-control" name="id_estudiante" id="id_estudiante" placeholder="id_estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_municipio">Municipio</label>
    <input type="text" class="form-control" name="municipio" id="id_municipio" placeholder="municipio"  required>
  </div>
  <div class="form-group">
    <label for="id_lugar">Lugar</label>
    <input type="text" class="form-control" name="lugar" id="id_lugar" placeholder="lugar"  required>
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
    <th>id_convocatoria</th>
    <th>id_estudiante</th>
    <th>municipio</th>
    <th>lugar</th>
    
    <th colspan='2'>Acciones</th>
</tr>";
for ($i=0; $i <count($estudienteconvocatoria) ; $i++) { 
echo "
<tr>
<td name='id_estudiante'>". $estudientes[$i]['id_estudiante'] ."</td>
<td>". $estudienteconvocatoria[$i]['id_convocatoria'] ."</td>
<td>". $estudienteconvocatoria[$i]['id_estudiante'] ."</td>
<td>". $estudienteconvocatoria[$i]['municipio'] ."</td>
<td>". $estudienteconvocatoria[$i]['lugar'] ."</td>

<td> 
<form method=\"post\">
<input type=\"hidden\" name=\"r\" value=\"estudianteconvocatoria-editar\">
<input type=\"hidden\" name=\"id_estudianteconvocatoria\" value='".$estudienteconvocatoria[$i]['id_estudianteconvocatoria']."'>
<button type=\"submit\" class=\"btn btn-warning\" name=\"btn_editar\">Editar</button> 
</form>
</td>
<form method=\"post\">
<input type=\"hidden\" name=\"r\" value=\"estudianteconvocatoria-eliminar\">
<input type=\"hidden\" name=\"id_estudianteconvocatoria\" value='".$estudienteconvocatoria[$i]['id_estudianteconvocatoria']."'>
<td> <button type=\"submit\" class=\"btn btn-danger\" name=\"btn_eliminar\">Eliminar</button> </td>
</form>
</tr>";
}
echo "</table>
</form>
";

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::estudianteconvocatoriaArray(null,$_POST['id_convocatoria'],$_POST['id_estudiante'],$_POST['municipio'],$_POST['lugar'],null,true);
  //Insertar un registro
  $estudianteconvocatoriaController->create($arreglo);
  //Llenado del arreglo
  $estudienteconvocatoria= $estudianteconvocatoriaController->read();
}

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

if (isset($_POST['btn_eliminar'])) { 
  //Borrar registro de la base de datos
  $estudianteconvocatoriaController->delete($_POST['id_estudianteconvocatoria']);
  //Llenado del arreglo
  $estudienteconvocatoria= $estudianteconvocatoriaController->read();
}



//$status->create($new_status);
//$estudianteModel->create($new_status);
//$estudianteModel->update($new_status);
?>
</body>
</html>