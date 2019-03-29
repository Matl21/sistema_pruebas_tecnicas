<?php
require_once('./controllers/PreguntasController.php');
require_once('./controllers/ConvocatoriaController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$preguntasController = new PreguntasController();
$convocatoriaController = new ConvocatoriaController();

$convocatoria= $convocatoriaController->read();

$preguntas = array();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$preguntas= $preguntasController->findById($id);

if (isset($_POST['btn_editar'])) {  
    //Conversion de los datos a arreglo
    $arreglo= EntityArray::preguntasArray($id,$_POST['id_convocatoria'],$_POST['titulo'],$_POST['descripcion'],$_POST['etapa'],$_POST['fecha_creacion'],$_POST['activo']);
    //Editar un registro
    $preguntasController->update($arreglo);
    //Mensaje de registro editado
    Components::messageEdit();
    //Redireccionar al mantenimiento
    header('Location: index.php?contenido=pages/preguntas/preguntas.php');
  }
}

if (isset($_POST['btn_regresar'])) {
    header('Location: index.php?contenido=pages/preguntas/preguntas.php');
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
    <label for="convocatoria">Convocatoria</label>
    <select name="id_convocatoria" id="id_convocatoria" class="form-control" required>
        <option value="<?php echo $preguntas[0]['id_convocatoria'] ?>"><?php echo $convocatoria[$preguntas[0]['id_convocatoria']]['nombre'] ?></option>
        <?php 
        for ($i=0; $i <count($convocatoria) ; $i++) { 
            echo "<option value=\"". $convocatoria[$i]['id_convocatoria'] ."\">". $convocatoria[$i]['nombre'] ."</option>";
        }
        ?>
    </select>
  </div>
  <div class="form-group">
    <label for="id_titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo" id="id_titulo" value="<?php echo $preguntas[0]['titulo'] ?>" placeholder="Titulo"  required>
  </div>
  <div class="form-group">
    <label for="id_descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="id_descripcion" value="<?php echo $preguntas[0]['descripcion'] ?>" placeholder="Descripcion" >
  </div>
  <div class="form-group">
    <label for="id_etapa">Etapa</label>
    <input type="number" class="form-control" name="etapa" id="id_etapa" value="<?php echo $preguntas[0]['etapa'] ?>" placeholder="Etapa"  required>
  </div>
  <div class="form-group">
    <label for="id_fecha_creacion">Fecha creacion</label>
    <input type="date" class="form-control" name="fecha_creacion" id="id_fecha_creacion" value="<?php echo $preguntas[0]['fecha_creacion'] ?>" placeholder="Fecha_creacion"  required>
  </div>
  <div class="form-group">
    <label for="id_activo">Activo</label>
    <select name="activo" class="form-control" id="id_activo" placeholder="Activo" required>
        <option value="<?php echo $preguntas[0]['activo'] ?>">
        <?php 
        if($preguntas[0]['activo'] == 1){
            echo "Activo";
        }else{
            echo "Inactivo";
        }
        ?>
        </option>
        <option value="true">Activo</option>
        <option value="false">Inactivo</option>
    </select>
  </div>
  <div class="form-group">
  <button type="submit" name="btn_editar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
  <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/preguntas/preguntas.php'" >Regresar <i class="fas fa-share-square"></i></button>
  </div>
</form>

</body>
</html>