<?php
require_once('./controllers/EstudianteConvocatoriaController.php');
require_once('./controllers/ConvocatoriaController.php');
require_once('./controllers/EstudianteController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');


//Instacia de la clase controlador
$estudianteConvocatoriaController = new EstudianteConvocatoriaController();
$convocatoriaController = new ConvocatoriaController();
$estudianteController = new EstudianteController();

$convocatoria = $convocatoriaController->read();
$estudiantes = $estudianteController->read();

$estudianteConvocatoria = array();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$estudianteConvocatoria= $estudianteConvocatoriaController->findById($id);

if (isset($_POST['btn_editar'])) {  
    //Conversion de los datos a arreglo
    $arreglo= EntityArray::estudianteconvocatoriaArray($id,$_POST['id_convocatoria'],$_POST['id_estudiante'],$_POST['municipio'],$_POST['lugar']);
    //Insertar un registro
    var_dump($arreglo);
    $estudianteConvocatoriaController->update($arreglo);
    //Mensaje de registro editado
    Components::messageEdit();
    //Redireccionar al mantenimiento
    header('Location: index.php?contenido=pages/estudianteConvocatoria/estudianteConvocatoria.php');
  }
}

if (isset($_POST['btn_regresar'])) {
  header('Location: index.php?contenido=pages/estudianteConvocatoria/estudianteConvocatoria.php');
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
    <label for="id_convocatoria">Convocatoria</label>
    <select class="form-control" name="id_convocatoria" id="id_convocatoria"  required>
        <option value="<?php echo $estudianteConvocatoria[0]['id_convocatoria'] ?>"><?php echo $convocatoria[$estudianteConvocatoria[0]['id_convocatoria']-1]['nombre'] ?></option>
        <?php 
        for ($i=0; $i <count($convocatoria) ; $i++) { 
            echo "<option value=\"".$convocatoria[$i]['id_convocatoria']."\">".$convocatoria[$i]['nombre']."</option>";
        }
        ?>
    </select>
</div>
  <div class="form-group">
    <label for="id_estudiante">Estudiante</label>
    <select class="form-control" name="id_estudiante" id="id_estudiante" placeholder="id_estudiante" required>
        <?php 
        for ($i=0; $i <count($convocatoria) ; $i++) { 
            echo "<option value=\"".$estudiantes[$i]['id_estudiante']."\">".$estudiantes[$i]['nombre']."</option>";
        }
        ?>
    </select>
</div>
  <div class="form-group">
    <label for="id_municipio">Municipio</label>
    <input type="text" class="form-control" name="municipio" value="<?php echo $estudianteConvocatoria[0]['municipio'] ?>" id="id_municipio" placeholder="municipio"  required>
  </div>
  <div class="form-group">
    <label for="id_lugar">Lugar</label>
    <input type="text" class="form-control" name="lugar" id="id_lugar" value="<?php echo $estudianteConvocatoria[0]['lugar'] ?>" placeholder="lugar"  required>
  </div>
  <div class="form-group">
    <button type="submit" name="btn_editar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
  <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/estudianteConvocatoria/estudianteConvocatoria.php'" >Regresar <i class="fas fa-share-square"></i></button>
  </div>
  </form>

</body>
</html>