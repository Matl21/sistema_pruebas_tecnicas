<?php
require_once('./controllers/EstudianteController.php');
require_once('./controllers/ConvocatoriaController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$estudianteController = new EstudianteController();
$convocatoriaController = new ConvocatoriaController();
//Llenado del arreglo
$estudiantes = $estudianteController->read();
$convocatoria= $convocatoriaController->read();

if (isset($_POST['btn_enviar'])) {
    $id_convocatoria= $_POST['convocatoria'];
    $id_estudiante = $_POST['estudiante'];
    switch ($id_convocatoria) {
        case 1:
        header("Location: index.php?contenido=pages/examenes/steps_mvc.php&id=".$id_estudiante."");
            break;
        case 2:
        header("Location: index.php?contenido=pages/examenes/steps_xamarin.php&id=".$id_estudiante."");
            break;
        case 3:
        header("Location: index.php?contenido=pages/examenes/steps_html.php&id=".$id_estudiante."");
            break;
        case 4:
        header("Location: index.php?contenido=pages/examenes/steps_tester.php&id=".$id_estudiante."");
            break;
        case 5:
        header("Location: index.php?contenido=pages/examenes/steps_java.php&id=".$id_estudiante."");
            break;
        case 6:
        header("Location: index.php?contenido=pages/examenes/steps_php.php&id=".$id_estudiante."");
            break;
        default:
            echo "Ingrese una convocatoria valida";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seleccion de Prueba</title>
    <style>
    .div-izquierdo{
        min-width: 150px;
        width: 20%;
        background: rgb(229, 231, 233  );
    }
    .div-derecho{
        min-width: 400px;
        width:75%;
        min-height: 400px;
    }
    .contenedor{
  background: white;
  color: black;
  display: flex; /* or inline-flex */
  flex-flow: row wrap;
    }
    .nav-link:hover{
        background: rgb(127, 140, 141);
        transition: 1.5s;
    }
    @media only screen and (max-width: 820px) {
        .div-izquierdo{
            width: 80%;
        }
    }
    </style>
</head>
<body>
<div class="contenedor">
<div class="div-izquierdo container">
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Reponder un examen</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Valoración de respuestas</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Examenes de estudiantes</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Preguntas</a>
</div>
</div>
<div class="div-derecho container">
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

  <h4>Seleccione una prueba técnica</h4>
    <hr/>
    <form method="post">

    <div class="form-group">
    <label for="id_estudiante">Nombre del estudiante*</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user-edit"></i></div>
        </div>
    <select name="estudiante" id="id_estudiante"  class="form-control" required>
        <?php 
        for ($i=0; $i <count($convocatoria) ; $i++) { 
            echo "<option value=\"".$estudiantes[$i]['id_estudiante']."\">".$estudiantes[$i]['nombre']." ".$estudiantes[$i]['apellido']."</option>"; 
        }
        ?>
    </select>
    </div>
    </div>

    <div class="form-group">
    <label for="id_convocatoria">Nombre de la convocatoria*</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-bullhorn"></i></div>
        </div>
    <select name="convocatoria" id="id_convocatoria"  class="form-control" required>
        <?php 
        for ($i=0; $i <count($convocatoria) ; $i++) { 
            echo "<option value=\"".$convocatoria[$i]['id_convocatoria']."\">".$convocatoria[$i]['nombre']."</option>"; 
        }
        ?>
    </select>
    </div>

    </div>
    <br/>
    <button type="submit" name="btn_enviar" class="btn btn-success animated shake">Ir a la prueba <i class="fas fa-external-link-alt"></i></button>
    </form>

  </div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
  <h4>Seleccione un Alumno</h4>
    <hr/>

  </div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
  <h4>Seleccione un Alumno</h4>
    <hr/>
  </div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
  <h4>Seleccione una convocatoria</h4>
    <hr/>
  </div>
</div>
</div>
</div>
    

    <script src="public/js/jquery-3.3.1.slim.min.js"></script>
</body>
</html>