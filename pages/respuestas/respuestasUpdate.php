<?php
require_once('./controllers/RespuestasController.php');
require_once('./controllers/EstudianteController.php');
require_once('./controllers/PreguntasController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$respuestasController = new RespuestasController();
$estudianteController = new EstudianteController();
$preguntasController = new PreguntasController();
//Llenado del arreglo
$estudiantes = $estudianteController->read();
$preguntas = $preguntasController->read();

$respuestas = array();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$respuestas= $respuestasController->findById($id);

//Tomar la fecha actual
$fecha= date("Y-m-d");

if (isset($_POST['btn_editar'])) {  
    //Conversion de los datos a arreglo
    $arreglo= EntityArray::respuestasArray($id,$_POST['id_pregunta'],$_POST['id_estudiante'],$_POST['respuesta'],$fecha,$_POST['abierta'],$_POST['valoracion']);
    //var_dump($arreglo);
    //Insertar un registro
    $respuestasController->update($arreglo);
    //Mensaje de registro editado
    Components::messageEdit();
    //Redireccionar al mantenimiento
    header('Location: index.php?contenido=pages/respuestas/respuestas.php');
}
}
//Regresar a la ventana anterior
if (isset($_POST['btn_regresar'])) {
  header('Location: index.php?contenido=pages/respuestas/respuestas.php');
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
            <label for="id_pregunta">Pregunta*</label>
            <select class="form-control" name="id_pregunta" id="id_pregunta" placeholder="id_pregunta" required>
                <option value="<?php echo $respuestas[0]['id_pregunta'] ?>"><?php echo $preguntas[$respuestas[0]['id_pregunta']-1]['titulo'] ?></option>
                <?php
                for ($i=0; $i <count($preguntas) ; $i++) { 
                    echo "<option value=\"".$preguntas[$i]['id_pregunta']."\">".($i+1).". ".$preguntas[$i]['titulo']." </option>";
                } 
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id_estudiante">Estudiante*</label>
            <select class="form-control" name="id_estudiante" id="id_estudiante" placeholder="id_estudiante" required>
            <option value="<?php echo $respuestas[0]['id_estudiante'] ?>"><?php echo $estudiantes[$respuestas[0]['id_pregunta']-1]['nombre']." ".$estudiantes[$respuestas[0]['id_pregunta']-1]['apellido'] ?></option>
                <?php
                for ($i=0; $i <count($estudiantes) ; $i++) { 
                  echo "<option value=\"".$estudiantes[$i]['id_estudiante']."\">".$estudiantes[$i]['nombre']." ".$estudiantes[$i]['apellido']."</option>";
                } 
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id_respuesta">Respuesta*</label>
            <input type="text" class="form-control" name="respuesta" id="id_respuesta" value="<?php echo $respuestas[0]['respuesta'] ?>" placeholder="respuesta" required>
        </div>
        <div class="form-group">
            <label for="id_abierta">Tipo de pregunta*</label>
            <select class="form-control" name="abierta" id="id_abierta" placeholder="descripcion" required>
                <?php 
                if ($respuestas[0]['abierta']==0) {
                    echo "<option value=\"0\">Cerrada</option>";
                    echo "<option value=\"1\">Abierta</option>";
                }
                else{
                    echo "<option value=\"1\">Abierta</option>";
                    echo "<option value=\"0\">Cerrada</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id_valoracion">Valoracion</label>
            <input type="text" class="form-control" name="valoracion" id="id_valoracion" value="<?php echo $respuestas[0]['valoracion'] ?>" placeholder="valoracion">
        </div>
        <div class="form-group">
        <button type="submit" name="btn_editar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
        <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/respuestas/respuestas.php'" >Regresar <i class="fas fa-share-square"></i></button>
        </div>
    </form>
    <br />

</body>

</html>