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
$estudiantes = $estudianteConvocatoriaController->estudianteSinConvocatoria();

if (isset($_POST['btn_estudiante'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::estudianteArray(null,$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Insertar un registro
  $estudianteController->create($arreglo);
  //Mensaje de Nuevo registro
  Components::messageAgregar();
  //redireccionar a la pagina de mantenimiento
  header("Refresh:0.75");
}

if (isset($_POST['btn_convocatoria'])) {  
    //Conversion de los datos a arreglo
    $arreglo= EntityArray::estudianteconvocatoriaArray(null,$_POST['id_convocatoria'],$_POST['id_estudiante'],$_POST['municipio'],$_POST['lugar']);
    //Insertar un registro
    $estudianteConvocatoriaController->create($arreglo);
    //Mensaje de Nuevo registro
    Components::messageAgregar();
    //redireccionar a la pagina de mantenimiento
    header('Location: index.php?contenido=pages/estudianteConvocatoria/estudianteConvocatoria.php');
  }

if (isset($_POST['btn_regresar'])) {
  header('Location: index.php?contenido=pages/estudiantes/estudiantes.php');
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

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">Registrar Estudiante</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">Convocatoria</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <br />
            <h3>Registrar Estudiante</h3>
            <hr>

            <form method="post">
                <div class="form-group">
                    <label for="id_nombre">Nombre</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user-edit"></i></div>
                        </div>
                        <input type="text" id="nombre" class="form-control" minlength="2" maxlength="64" name="nombre" id="id_nombre"
                            placeholder="Nombre del estudiante" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="id_apellido">Apellido</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user-edit"></i></div>
                        </div>
                        <input type="text" id="apellido" class="form-control" minlength="2" maxlength="64" name="apellido" id="id_apellido"
                            placeholder="Apellido del estudiante" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="id_email">E-mail</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                        </div>
                        <input type="email" id="email" class="form-control" minlength="3" maxlength="64" name="email" id="id_email"
                            placeholder="Correo" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo</label>

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-venus-mars"></i></div>
                        </div>
                        <select name="sexo" id="sexo" class="form-control col-5" required>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="id_fecha_nacimiento">Fecha de Nacimiento</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                        <input type="date" id="fecha_nacimiento" class="form-control col-4" name="fecha_nacimiento"
                            id="id_fecha_nacimiento" placeholder="Fcha de nacimiento" required>
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <button type="submit" name="btn_estudiante" class="btn btn-primary">Guardar <i
                            class="far fa-save"></i></button>
                    <button type="button" name="btn_regresar" class="btn btn-danger"
                        onclick="window.location.href='index.php'">Regresar
                        <i class="fas fa-share-square"></i></button>
                </div>
            </form>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <br />
            <h3>Agregar Estudiante a convocatoria</h3>
            <hr>

            <form method="post">
                <div class="form-group">
                    <label for="id_convocatoria">Convocatoria</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-bullhorn"></i></div>
                        </div>
                        <select class="form-control" name="id_convocatoria" id="id_convocatoria" required>
                    </div>
                    <?php 
        for ($i=0; $i <count($convocatoria) ; $i++) { 
            echo "<option value=\"".$convocatoria[$i]['id_convocatoria']."\">".$convocatoria[$i]['nombre']."</option>";
        }
        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_estudiante">Estudiante</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user-edit"></i></div>
                        </div>
                        <select class="form-control" name="id_estudiante" id="id_estudiante" placeholder="id_estudiante"
                            required>
                    </div>
                    <?php 
        for ($i=0; $i <count($estudiantes) ; $i++) { 
            echo "<option value=\"".$estudiantes[$i]['id_estudiante']."\">".$estudiantes[$i]['nombre']." ". $estudiantes[$i]['apellido']."</option>";
        }
        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_municipio">Municipio</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-place-of-worship"></i></div>
                        </div>
                        <input type="text" class="form-control" name="municipio" id="id_municipio"
                            placeholder="municipio" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="id_lugar">Lugar</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-place-of-worship"></i></div>
                        </div>
                        <input type="text" class="form-control" name="lugar" id="id_lugar" placeholder="lugar" required>
                    </div>
                </div>
                <br/>
                <div class="form-group">
                    <button type="submit" name="btn_convocatoria" class="btn btn-primary">Guardar <i
                            class="far fa-save"></i></button>
                    <button type="button" name="btn_regresar" class="btn btn-danger"
                        onclick="window.location.href='index.php'">Regresar
                        <i class="fas fa-share-square"></i></button>
                </div>
            </form>

        </div>
    </div>



    <script src="public/js/jquery-3.3.1.slim.min.js"></script>
</body>

</html>