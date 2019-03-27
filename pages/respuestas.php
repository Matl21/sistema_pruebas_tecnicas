<?php
require_once('./controllers/RespuestasController.php');
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
echo "<h3>Mantenimiento a Respuestas</h3>";
echo "<hr>";

//Instacia de la clase controlador
$respuestasController = new RespuestasController();

//Llenado del arreglo
$respuestas= $respuestasController->read();
?>

<form method="post">
  <div class="form-group">
    <label for="id_respuesta">id_respuesta</label>
    <input type="number" class="form-control" name="id_respuesta" id="id_respuesta" placeholder="id_respuesta" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_pregunta">id_pregunta</label>
    <input type="number" class="form-control" name="id_pregunta" id="id_pregunta" placeholder="id_pregunta" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_estudiante">id_estudiante</label>
    <input type="number" class="form-control" name="id_estudiante" id="id_estudiante" placeholder="id_estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>

  <div class="form-group">
    <label for="id_respuesta">respuesta</label>
    <input type="text" class="form-control" name="respuesta" id="id_respuesta" placeholder="respuesta"  required>
  </div>
  <div class="form-group">
    <label for="id_descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="id_descripcion" placeholder="descripcion"  required>
  </div>
  <div class="form-group">
    <label for="id_valoracion">Valoracion</label>
    <input type="text" class="form-control" name="valoracion" id="id_descripcion" placeholder="valoracion"  required>
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
    <th>id_respuesta</th>
    <th>id_pregunta</th>
    <th>id_estudiante</th>
    <th>respuesta</th>
    <th>descripcion</th>
    <th>valoracion</th>
    
    <th colspan='2'>Acciones</th>
</tr>";
for ($i=0; $i <count($respuestas) ; $i++) { 
echo "
<tr>
<td name='id_respuestas'>". $respuestas[$i]['id_respuesta'] ."</td>
<td>". $respuestas[$i]['id_pregunta'] ."</td>
<td>". $respuestas[$i]['id_estudiante'] ."</td>
<td>". $respuestas[$i]['respuesta'] ."</td>
<td>". $respuestas[$i]['descripcion'] ."</td>
<td>". $respuestas[$i]['valoracion'] ."</td>

<td> 
<form method=\"post\">
<input type=\"hidden\" name=\"r\" value=\"respuestas-editar\">
<input type=\"hidden\" name=\"id_respuesta\" value='".$respuestas[$i]['id_respuesta']."'>
<button type=\"submit\" class=\"btn btn-warning\" name=\"btn_editar\">Editar</button> 
</form>
</td>
<form method=\"post\">
<input type=\"hidden\" name=\"r\" value=\"respuestas-eliminar\">
<input type=\"hidden\" name=\"id_estudiantes\" value='".$respuestas[$i]['id_respuesta']."'>
<td> <button type=\"submit\" class=\"btn btn-danger\" name=\"btn_eliminar\">Eliminar</button> </td>
</form>
</tr>";
}
echo "</table>
</form>
";

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::respuestasArray(null,$_POST['id_respuesta'],$_POST['id_pregunta'],$_POST['id_estudiante'],$_POST['respuesta'],$_POST['descripcion'],$_POST['valoracion']);
  //Insertar un registro
  $respuestasController->create($arreglo);
  //Llenado del arreglo
  $respuestas= $respuestasController->read();
}

if (isset($_POST['btn_editar'])) {  
  echo "Le diste al boton editar<br/>";
  echo "El valor de id es: ".$_POST['id_respuestas'];
  //Conversion de los datos a arreglo
  //$arreglo= EntityArray::estudianteArray($_POST['id_estudiante'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Editar un registro
  //$estudianteController->update($arreglo);
  //Llenado del arreglo
  $respuestas= $respuestasController->read();
}

if (isset($_POST['btn_eliminar'])) { 
  //Borrar registro de la base de datos
  $respuestasController->delete($_POST['id_respuestas']);
  //Llenado del arreglo
  $respuestas= $respuestasController->read();
}



//$status->create($new_status);
//$estudianteModel->create($new_status);
//$estudianteModel->update($new_status);
?>
</body>
</html>