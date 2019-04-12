<?php
require_once('./controllers/ConvocatoriaController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');


//Instacia de la clase controlador
$convocatoriaController = new ConvocatoriaController();

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::convocatoriaArray(null,$_POST['nombre'],$_POST['descripcion']);
  //Insertar un registro
  $convocatoriaController->create($arreglo);
  //Mensaje de Nuevo registro
  Components::messageAgregar();
  //redireccionar a la pagina de mantenimiento
  header('Location: index.php?contenido=pages/convocatoria/convocatoria.php');
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
     <title>Nuevo registro</title>
</head>
<body>

<h3>Nuevo Registro</h3>
<hr>

<form method="post">
<div class="form-group">
    <label for="id_nombre">Nombre de la convocatoria</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-bullhorn"></i></div>
        </div>
    <input type="text" class="form-control" name="nombre" id="id_nombre" placeholder="Nombre" required>
    </div>
  </div>
  <div class="form-group">
    <label for="id_descripcion">Descripción</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-file-alt"></i></div>
        </div>
    <textarea type="text" class="form-control" name="descripcion" id="id_descripcion" placeholder="Descripción" ></textarea>
  </div>
  <br/>
  <div class="form-group">
    <button type="submit" name="btn_agregar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
  <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/convocatoria/convocatoria.php'" >Regresar <i class="fas fa-share-square"></i></button>
  </div>
  </form>

</body>
</html>