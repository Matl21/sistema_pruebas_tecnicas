<?php
require_once('./controllers/UsuariosController.php');
require_once('./controllers/RolController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$usuariosController = new UsuariosController();
$rolController = new RolController();
//Llenar el arrgelo con los roles
$rol = $rolController->read();

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::usuariosArray(null,$_POST['id_rol'],$_POST['username'],$_POST['password']);
  var_dump($arreglo);
  //Insertar un registro
  $usuariosController->create($arreglo);
  //Mensaje de Nuevo registro
  Components::messageAgregar();
  //redireccionar a la pagina de mantenimiento
  header('Location: index.php?contenido=pages/usuarios/usuarios.php');
}

if (isset($_POST['btn_regresar'])) {
  header('Location: index.php?contenido=pages/usuarios/usuarios.php');
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
    <label for="id_rol">Rol</label>
    <select class="form-control" name="id_rol" id="id_rol" placeholder="Rol" required>
    <?php
    for ($i=0; $i <count($rol) ; $i++) { 
      echo "<option value=\"". $rol[$i]['id_rol'] ."\">". $rol[$i]['nombre'] ."</option>";
    }
    ?>
    </select>
  </div>
  <div class="form-group">
    <label for="id_username">Usuario</label>
    <input type="text" class="form-control" name="username" id="id_username" placeholder="Usuario" >
  </div>
  <div class="form-group">
    <label for="id_password">Contraseña</label>
    <input type="password" class="form-control" name="password" id="id_password" placeholder="Contraseña" >
  </div>
  <br/>
  <div class="form-group">
    <button type="submit" name="btn_agregar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
  <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/usuarios/usuarios.php'" >Regresar <i class="fas fa-share-square"></i></button>
  </div>
  </form>

</body>
</html>