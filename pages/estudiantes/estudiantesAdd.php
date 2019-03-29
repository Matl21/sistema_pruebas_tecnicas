<?php
require_once('./controllers/EstudianteController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

echo "<h3>Nuevo Registro</h3>";
echo "<hr>";
//Instacia de la clase controlador
$estudianteController = new EstudianteController();

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::estudianteArray(null,$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Insertar un registro
  $estudianteController->create($arreglo);
  //Mensaje de Nuevo registro
  Components::messageAgregar();
  //redireccionar a la pagina de mantenimiento
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

<form method="post">
  <div class="form-group">
    <label for="id_nombre">Nombre</label>
    <input type="text" id="nombre" class="form-control" name="nombre" id="id_nombre" placeholder="Nombre del estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_apellido">Apellido</label>
    <input type="text" id="apellido" class="form-control" name="apellido" id="id_apellido" placeholder="Apellido del estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_email">E-mail</label>
    <input type="email" id="email" class="form-control" name="email" id="id_email" placeholder="Correo"  required>
  </div>
  <div class="form-group">
    <label for="sexo">Sexo</label>
    <select name="sexo" id="sexo" required>
    <option value="Femenino">Femenino</option>
    <option value="Masculino">Masculino</option>
    <option value="Otro">Otro</option>
    </select>
  </div>
  <div class="form-group">
    <label for="id_fecha_nacimiento">Fecha de Nacimiento</label>
    <input type="date" id="fecha_nacimiento" class="form-control" name="fecha_nacimiento" id="id_fecha_nacimiento" placeholder="Fcha de nacimiento"  required>
  </div>
  <div class="form-group">
  <button type="submit" name="btn_editar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
  <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/estudiantes/estudiantes.php'" >Regresar <i class="fas fa-share-square"></i></button>
  </div>
  </form>

  

  <?php
  
?>

</body>
</html>