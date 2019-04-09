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
$respuestas= $respuestasController->read();
$estudiantes = $estudianteController->read();
$preguntas = $preguntasController->read();

//Tomar la fecha actual
$fecha= date("Y-m-d");

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::respuestasArray(null,$_POST['id_pregunta'],$_POST['id_estudiante'],$_POST['respuesta'],$fecha,$_POST['abierta'],$_POST['valoracion'],$_POST['revision']);
  //Insertar un registro
  $respuestasController->create($arreglo);
  //Mensaje de Nuevo registro
  Components::messageAgregar();
  //redireccionar a la pagina de mantenimiento
  header('Location: index.php?contenido=pages/respuestas/respuestas.php');
}

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
                <?php
                for ($i=0; $i <count($estudiantes) ; $i++) { 
                  echo "<option value=\"".$estudiantes[$i]['id_estudiante']."\">".$estudiantes[$i]['nombre']." ".$estudiantes[$i]['apellido']."</option>";
                } 
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id_respuesta">Respuesta*</label>
            <input type="text" class="form-control" name="respuesta" id="id_respuesta" placeholder="respuesta" required>
        </div>
        <div class="form-group">
            <label for="id_abierta">Tipo de pregunta</label>
            <select class="form-control" name="abierta" id="id_abierta" placeholder="descripcion">
                <option value="false">Cerrada</option>
                <option value="true">Abierta</option>
            </select>
        </div>
        <div class="form-group">
            <label for="id_valoracion">Valoracion</label>
            <input type="text" class="form-control" name="valoracion" id="id_descripcion" placeholder="valoracion">
        </div>
        <div class="form-group">
            <label for="id_revision">Revisión</label>
            <select class="form-control" name="revision" id="id_revision" placeholder="descripcion">
                <option value="false">No</option>
                <option value="true">Si</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" name="btn_agregar" class="btn btn-primary">Guardar <i
                    class="far fa-save"></i></button>
            <button type="button" name="btn_regresar" class="btn btn-danger"
                onclick="window.location.href='index.php?contenido=pages/respuestas/respuestas.php'">Regresar <i
                    class="fas fa-share-square"></i></button>
        </div>
    </form>
    <br />

</body>

</html>