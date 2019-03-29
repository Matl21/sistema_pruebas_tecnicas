<?php
require_once('./controllers/PreguntasController.php');
require_once('./controllers/ConvocatoriaController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$preguntasController = new PreguntasController();
$convocatoriaController = new ConvocatoriaController();

$convocatoria= $convocatoriaController->read();

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::preguntasArray(null,$_POST['id_convocatoria'],$_POST['titulo'],$_POST['descripcion'],$_POST['etapa'],$_POST['fecha_creacion'],true);
  //Insertar un registro
  $preguntasController->create($arreglo);
  //Mensaje de Nuevo registro
  Components::messageAgregar();
  //redireccionar a la pagina de mantenimiento
  header('Location: index.php?contenido=pages/preguntas/preguntas.php');
}

if (isset($_POST['btn_regresar'])) {
  header('Location: index.php?contenido=pages/preguntas/preguntas.php');
}

$fecha = date("d m Y, H:i");

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
    <label for="id_convocatoria">Convocatoria</label>
    <select name="id_convocatoria" id="id_convocatoria" class="form-control" required>
        <?php 
        for ($i=0; $i <count($convocatoria) ; $i++) { 
            echo "<option value=\"". $convocatoria[$i]['id_convocatoria'] ."\">". $convocatoria[$i]['nombre'] ."</option>";
        }
        ?>
    </select>
  </div>
  <div class="form-group">
    <label for="id_titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo" id="id_titulo" placeholder="Titulo"  required>
  </div>
  <div class="form-group">
    <label for="id_descripcion">Descripción</label>
    <input type="text" class="form-control" name="descripcion" id="id_descripcion" placeholder="Descripcion" >
  </div>
  <div class="form-group">
    <label for="id_etapa">Etapa</label>
    <input type="number" class="form-control" name="etapa" id="id_etapa" placeholder="Etapa"  required>
  </div>
  <div class="form-group">
    <label for="id_fecha_creacion">Fecha creación</label>
    <input type="date" class="form-control" name="fecha_creacion" id="id_fecha_creacion" placeholder="Fecha_creacion"  required>
  </div>
  <div class="form-group">
    <button type="submit" name="btn_agregar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
  <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/preguntas/preguntas.php'" >Regresar <i class="fas fa-share-square"></i></button>
  </div>
  </form>

</body>
</html>