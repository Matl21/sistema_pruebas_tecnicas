<?php
require_once('./controllers/ConvocatoriaController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$convocatoriaController = new ConvocatoriaController();
$convocatoria = array();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$convocatoria= $convocatoriaController->findById($id);

if (isset($_POST['btn_editar'])) {  
    //Conversion de los datos a arreglo
    $arreglo= EntityArray::convocatoriaArray($id,$_POST['nombre'],$_POST['descripcion']);
    var_dump($arreglo);
    //Insertar un registro
    $convocatoriaController->update($arreglo);
    //Mensaje de registro editado
    Components::messageEdit();
    //Redireccionar al mantenimiento
    header('Location: index.php?contenido=pages/convocatoria/convocatoria.php');
  }
}

if (isset($_POST['btn_regresar'])) {
    header('Location: index.php?contenido=pages/convocatoria/convocatoria.php');
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
    <label for="id_nombre">Nombre de la convocatoria</label>
    <input type="text" class="form-control" name="nombre" id="id_nombre" value="<?php echo $convocatoria[0]['nombre'] ?>" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label for="id_descripcion">Descripción</label>
    <input class="form-control" name="descripcion" id="id_descripcion" value="<?php echo $convocatoria[0]['descripcion'] ?>" placeholder="Descripcion" >
  </div>
  <div class="form-group">
  <button type="submit" name="btn_editar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
  <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/convocatoria/convocatoria.php'" >Regresar <i class="fas fa-share-square"></i></button>
  </div>
</form>


</body>
</html>