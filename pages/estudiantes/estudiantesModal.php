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



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarModal">
  Nuevo Registro
</button>
<br/><br/>

<!-- Modal Agregar -->
<div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="Modal de Edicion" aria-hidden="true">
<form method="post" id="insert_form">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
    <label for="id_nombre">Nombre</label>
    <input type="text" id="agregar_nombre" class="form-control" name="nombre" id="id_nombre" placeholder="Nombre del estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_apellido">Apellido</label>
    <input type="text" id="agregar_apellido" class="form-control" name="apellido" id="id_apellido" placeholder="Apellido del estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_email">E-mail</label>
    <input type="email" id="agregar_email" class="form-control" name="email" id="id_email" placeholder="Correo"  required>
  </div>
  <div class="form-group">
    <label for="sexo">Sexo</label>
    <select name="sexo" id="agregar_sexo" required>
    <option value="Femenino">Femenino</option>
    <option value="Masculino">Masculino</option>
    <option value="Otro">Otro</option>
    </select>
  </div>
  <div class="form-group">
    <label for="id_fecha_nacimiento">Fecha de Nacimiento</label>
    <input type="date" id="agregar_fecha_nacimiento" class="form-control" name="fecha_nacimiento" id="id_fecha_nacimiento" placeholder="Fcha de nacimiento"  required>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="btn_agregar" class="btn btn-primary" onClick="document.location.reload(true)">Guardar</button>
      </div>
    </div>
  </div>
</form>
</div>

<!-- Modal Eliminar -->
<div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="Modal de eliminacion" aria-hidden="true">
  <form method="post">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <input type="hidden" id="eliminar_id_estudiante" value="">
      </div>
      <div class="modal-body">
        <label>¿Esta seguro que deseas eliminar este registro?</label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger" name="btn_eliminar">Eliminar</button>
      </div>
    </div>
  </div>
  </form>
</div>

<!-- Modal Editar -->
<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="Modal de Edicion" aria-hidden="true">
<form method="post">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input type="hidden" id="edit_id_estudiante">
      <div class="form-group">
    <label for="edit_nombre">Nombre</label>
    <input type="text" id="edit_nombre" class="form-control" name="nombre" placeholder="Nombre del estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="edit_apellido">Apellido</label>
    <input type="text" id="edit_apellido" class="form-control" name="apellido" placeholder="Apellido del estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" id="edit_email" class="form-control" name="email" placeholder="Correo"  required>
  </div>
  <div class="form-group">
    <label for="sexo">Sexo</label>
    <select name="sexo" id="edit_sexo" required>
    <option value="Femenino">Femenino</option>
    <option value="Masculino">Masculino</option>
    <option value="Otro">Otro</option>
    </select>
  </div>
  <div class="form-group">
    <label for="edit_fecha_nacimiento">Fecha de Nacimiento</label>
    <input type="date" id="edit_fecha_nacimiento" class="form-control" name="fecha_nacimiento" placeholder="Fcha de nacimiento"  required>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="btn_editar" class="btn btn-warning">Guardar</button>
      </div>
    </div>
  </div>
</form>
</div>

<?php
//Tabla de clase 
echo "
<table class=\"table-responsive table-bordered table-striped\">
<tr>
    <th>id</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Email</th>
    <th>Sexo</th>
    <th>Fecha Nacimiento</th>
    <th>Foto</th>
    <th>Activo</th>
    <th colspan='2' class=\"th_text\">Acciones</th>
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
<button type=\"button\" class=\"btn btn-warning btn_modal_editar\" name=\"btn_modal-editar\" data-toggle=\"modal\" data-target=\"#editarModal\">Editar</button> 
</form>
</td>
<td> 
<form method=\"post\">
<input type=\"hidden\" name=\"r\" value=\"estudiante-eliminar\">
<input type=\"hidden\" name=\"id_estudiante\" value='".$estudientes[$i]['id_estudiante']."'>
<button type=\"button\" class=\"btn btn-danger btn_modal_eliminar\" name=\"btn_modal_eliminar\" data-toggle=\"modal\" data-target=\"#eliminarModal\" >Eliminar</button> </td>
</form>
</tr>";
}
echo "</table>";

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
  echo "El valor de id es: ".$_POST['edit_nombre'];
  //Conversion de los datos a arreglo
  //$arreglo= EntityArray::estudianteArray($_POST['id_estudiante'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Editar un registro
  //$estudianteController->update($arreglo);
  //Llenado del arreglo
  $estudientes= $estudianteController->read();
}

if (isset($_POST['btn_eliminar'])) { 
  //Borrar registro de la base de datos
  echo "El valor de id es: ".$_POST['id_modal_estudiante'];
  //$estudianteController->delete($_POST['id_estudiante']);
  //Llenado del arreglo
  $estudientes= $estudianteController->read();
}

?>

</body>
</html>