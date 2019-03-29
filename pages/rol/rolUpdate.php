<?php
require_once('./controllers/RolController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$rolController = new RolController();
$rol = array();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$rol= $rolController->findById($id);

if (isset($_POST['btn_editar'])) {  
    //Conversion de los datos a arreglo
   $arreglo= EntityArray::rolArray($id,$_POST['nombre'],$_POST['descripcion']);
    //Insertar un registro
    $rolController->update($arreglo);
    //Mensaje de registro editado
    Components::messageEdit();
    //Redireccionar al mantenimiento
    header('Location: index.php?contenido=pages/rol/rol.php');
  }
}

if (isset($_POST['btn_regresar'])) {
    header('Location: index.php?contenido=pages/rol/rol.php');
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

<h3>Editar Registro</h3>
<hr>

<form method="post">
<div class="form-group">
    <label for="id_nombre">Nombre de el rol</label>
    <input type="text" class="form-control" name="nombre" id="id_nombre" value="<?php echo $rol[0]['nombre'] ?>" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label for="id_descripcion">Descripción</label>
    <input class="form-control" name="descripcion" id="id_descripcion" value="<?php echo $rol[0]['descripcion'] ?>" placeholder="Descripcion" >
  </div>
  <div class="form-group">
  <button type="submit" name="btn_editar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
  <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/rol/rol.php'" >Regresar <i class="fas fa-share-square"></i></button>
  </div>
</form>

</body>
</html>