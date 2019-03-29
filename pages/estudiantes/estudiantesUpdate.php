<?php
require_once('./controllers/EstudianteController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$estudianteController = new EstudianteController();
$estudientes = array();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$estudientes= $estudianteController->findById($id);

if (isset($_POST['btn_editar'])) {  
    //Conversion de los datos a arreglo
    $arreglo= EntityArray::estudianteArray($_POST['id_estudiante'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
    //Editar un registro
    $estudianteController->update($arreglo);
    //Mensaje de registro editado
    Components::messageEdit();
    //Redireccionar al mantenimiento
    header('Location: index.php?contenido=pages/estudiantes/estudiantes.php');
  }
}

if (isset($_POST['btn_regresar'])) {
    header('Location: index.php?contenido=pages/estudiantes/estudiantes.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Editar registro</title>
</head>
<body>

<?php
echo "<h3>Editar Registro</h3>";
echo "<hr>";

?>
<form method="post">
<input type="hidden" name="id_estudiante" value="<?php echo $estudientes[0]['id_estudiante'] ?>">
  <div class="form-group">
    <label for="edit_nombre">Nombre</label>
    <input type="text" id="edit_nombre" class="form-control" name="nombre" value="<?php echo $estudientes[0]['nombre'] ?>" placeholder="Nombre del estudiante" required>
  </div>
  <div class="form-group">
    <label for="edit_apellido">Apellido</label>
    <input type="text" id="edit_apellido" class="form-control" name="apellido" value="<?php echo $estudientes[0]['apellido'] ?>" placeholder="Apellido del estudiante"  required>
  </div>
  <div class="form-group">
    <label for="edit_email">E-mail</label>
    <input type="email" id="edit_email" class="form-control" name="email" value="<?php echo $estudientes[0]['email'] ?>" placeholder="Correo" required>
  </div>
  <div class="form-group">
    <label for="edit_sexo">Sexo</label>
    <select name="sexo" id="edit_sexo"  required>
    <option value="<?php echo $estudientes[0]['sexo'] ?>"><?php echo $estudientes[0]['sexo'] ?></option>
    <option value="Femenino">Femenino</option>
    <option value="Masculino">Masculino</option>
    <option value="Otro">Otro</option>
    </select>
  </div>
  <div class="form-group">
    <label for="edit_fecha_nacimiento">Fecha de Nacimiento</label>
    <input type="date" id="edit_fecha_nacimiento" class="form-control" name="fecha_nacimiento" value="<?php echo $estudientes[0]['fecha_nacimiento'] ?>" placeholder="Fcha de nacimiento"  required>
  </div>
  <div class="form-group">
  <button type="submit" name="btn_editar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
  <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/estudiantes/estudiantes.php'" >Regresar <i class="fas fa-share-square"></i></button>
  </div>
  </form>

  <?php
  
?>

</body>
</html>