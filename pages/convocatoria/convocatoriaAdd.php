<?php
require_once('./controllers/ConvocatoriaController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

echo "<h3>Nuevo Registro</h3>";
echo "<hr>";
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

<form method="post">
<div class="form-group">
    <label for="id_nombre">Nombre de la convocatoria</label>
    <input type="text" class="form-control" name="nombre" id="id_nombre" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label for="id_descripcion">Descripción</label>
    <textarea type="text" class="form-control" name="descripcion" id="id_descripcion" placeholder="Descripcion" ></textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary" name="btn_agregar">Agregar</button>
  </div>
  </form>

</body>
</html>