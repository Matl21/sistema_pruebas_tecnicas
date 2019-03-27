<?php
require_once('./controllers/PreguntasController.php');
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
echo "<h3>Mantenimiento a Preguntas</h3>";
echo "<hr>";

//Instacia de la clase controlador
$preguntasController = new PreguntasController();

//Llenado del arreglo
$preguntas= $preguntasController->read();
?>

<form method="post">
  <div class="form-group">
    <label for="convocatoria">Convocatoria</label>
    <input type="number" class="form-control" name="id_convocatoria" id="convocatoria" placeholder="Convocatoria" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo" id="id_titulo" placeholder="Titulo"  required>
  </div>
  <div class="form-group">
    <label for="id_descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="id_descripcion" placeholder="Descripcion"  required>
  </div>
  <div class="form-group">
    <label for="id_etapa">Etapa</label>
    <input type="number" class="form-control" name="etapa" id="id_etapa" placeholder="Etapa"  required>
  </div>
  <div class="form-group">
    <label for="id_fecha_creacion">Fecha creacion</label>
    <input type="date" class="form-control" name="fecha_creacion" id="id_fecha_creacion" placeholder="Fecha_creacion"  required>
  </div>
  <div class="form-group">
    <label for="id_activo">Activo</label>
    <input type="text" class="form-control" name="activo" id="id_activo" placeholder="Activo"  required>
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
    <th>id_pregunta</th>
    <th>Convocatoria</th>
    <th>Titulo</th>
    <th>Descripcion</th>
    <th>Etapa</th>
    <th>Fecha Creacion</th>
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
<form method=\"post\">
<input type=\"hidden\" name=\"r\" value=\"preguntas-editar\">
<input type=\"hidden\" name=\"id_pregunta\" value='".$preguntas[$i]['id_pregunta']."'>
<button type=\"submit\" class=\"btn btn-warning\" name=\"btn_editar\">Editar</button> 
</form>
</td>
<form method=\"post\">
<input type=\"hidden\" name=\"r\" value=\"preguntas-eliminar\">
<input type=\"hidden\" name=\"id_pregunta\" value='".$preguntas[$i]['id_pregunta']."'>
<td> <button type=\"submit\" class=\"btn btn-danger\" name=\"btn_eliminar\">Eliminar</button> </td>
</form>
</tr>";
}
echo "</table>
</form>
";

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::preguntasArray(null,$_POST['id_convocatoria'],$_POST['titulo'],$_POST['descripcion'],$_POST['etapa'],$_POST['fecha_creacion'],$_POST['activo']);
  //Insertar un registro
  $preguntasController->create($arreglo);
  //Llenado del arreglo
  $preguntas= $preguntasController->read();
}

if (isset($_POST['btn_editar'])) {  
  echo "Le diste al boton editar<br/>";
  echo "El valor de id es: ".$_POST['id_pregunta'];
  //Conversion de los datos a arreglo
  //$arreglo= EntityArray::estudianteArray($_POST['id_estudiante'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Editar un registro
  //$estudianteController->update($arreglo);
  //Llenado del arreglo
  $preguntas= $preguntasController->read();
}

if (isset($_POST['btn_eliminar'])) { 
  //Borrar registro de la base de datos
  $preguntasController->delete($_POST['id_pregunta']);
  //Llenado del arreglo
  $preguntas= $preguntasController->read();
}


?>
</body>
</html>