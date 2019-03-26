<?php
require_once('./controllers/EstudianteController.php');
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
echo "<h3>Mantenimiento a Estudiantes</h3>";
echo "<hr>";

//Instacia de la clase controlador
$estudianteController = new EstudianteController();

//Llenado del arreglo
$estudientes= $estudianteController->read();
?>

<form method="post">
  <div class="form-group">
    <label for="id_nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="id_nombre" placeholder="Nombre del estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_apellido">Apellido</label>
    <input type="text" class="form-control" name="apellido" id="id_apellido" placeholder="Apellido del estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_email">E-mail</label>
    <input type="email" class="form-control" name="email" id="id_email" placeholder="Correo"  required>
  </div>
  <div class="form-group">
    <label for="id_sexo">Sexo</label>
    <select name="sexo" id="id_sexo" required>
    <option value="Femenino">Femenino</option>
    <option value="Masculino">Masculino</option>
    <option value="Otro">Otro</option>
    </select>
  </div>
  <div class="form-group">
    <label for="id_fecha_nacimiento">Fecha de Nacimiento</label>
    <input type="date" class="form-control" name="fecha_nacimiento" id="id_fecha_nacimiento" placeholder="Fcha de nacimiento"  required>
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
    <th>Apellidos</th>
    <th>Email</th>
    <th>Sexo</th>
    <th>Fecha Nacimiento</th>
    <th>Foto</th>
    <th>Activo</th>
    <th colspan='2'>Acciones</th>
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
<form method=\"post\">
<input type=\"hidden\" name=\"r\" value=\"estudiante-editar\">
<input type=\"hidden\" name=\"id_estudiante\" value='".$estudientes[$i]['id_estudiante']."'>
<button type=\"submit\" class=\"btn btn-warning\" name=\"btn_editar\">Editar</button> 
</form>
</td>
<form method=\"post\">
<input type=\"hidden\" name=\"r\" value=\"estudiante-eliminar\">
<input type=\"hidden\" name=\"id_estudiante\" value='".$estudientes[$i]['id_estudiante']."'>
<td> <button type=\"submit\" class=\"btn btn-danger\" name=\"btn_eliminar\">Eliminar</button> </td>
</form>
</tr>";
}
echo "</table>
</form>
";

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::estudianteArray(null,$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Insertar un registro
  $estudianteController->create($arreglo);
  //Llenado del arreglo
  $estudientes= $estudianteController->read();
}

if (isset($_POST['btn_editar'])) {  
  echo "Le diste al boton editar<br/>";
  echo "El valor de id es: ".$_POST['id_estudiante'];
  //Conversion de los datos a arreglo
  //$arreglo= EntityArray::estudianteArray($_POST['id_estudiante'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Editar un registro
  //$estudianteController->update($arreglo);
  //Llenado del arreglo
  $estudientes= $estudianteController->read();
}

if (isset($_POST['btn_eliminar'])) { 
  //Borrar registro de la base de datos
  $estudianteController->delete($_POST['id_estudiante']);
  //Llenado del arreglo
  $estudientes= $estudianteController->read();
}



//$status->create($new_status);
//$estudianteModel->create($new_status);
//$estudianteModel->update($new_status);
?>
</body>
</html>