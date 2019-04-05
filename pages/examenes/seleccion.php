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
</head>
<body>
    <h4>Seleccione una prueba técnica</h4>
    <hr/>
    <form method="post">
    <div class="form-group">
    <label for="id_convocatoria">Nombre de la convocatoria*</label>
    <select name="convocatoria" id="id_convocatoria"  class="form-control" required>
        <?php 
        for ($i=0; $i <count($convocatoria) ; $i++) { 
            echo "<option value=\"".$convocatoria[$i]['id_convocatoria']."\">".$convocatoria[$i]['nombre']."</option>"; 
        }
        ?>
    </select>
    </div>
    <div class="form-group">
    <label for="id_estudiante">Nombre del estudiante*</label>
    <select name="estudiante" id="id_estudiante"  class="form-control" required>
        <?php 
        for ($i=0; $i <count($convocatoria) ; $i++) { 
            echo "<option value=\"".$estudiantes[$i]['id_estudiante']."\">".$estudiantes[$i]['nombre']." ".$estudiantes[$i]['apellido']."</option>"; 
        }
        ?>
    </select>
    </div>
    <button type="submit" name="btn_enviar" class="btn btn-success">Ir a la prueba <i class="fas fa-external-link-alt"></i></button>
    </form>
</body>
</html>