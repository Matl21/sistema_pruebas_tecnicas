<?php
require_once('./controllers/UsuariosController.php');
require_once('./controllers/RolController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$usuariosController = new UsuariosController();
$rolController = new RolController();
//Llenar arreglo de roles
$rol = $rolController->read();
$usuarios = array();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$usuarios= $usuariosController->findById($id);

if (isset($_POST['btn_editar'])) {  
    //Conversion de los datos a arreglo
    $arreglo= EntityArray::usuariosArray($id,$_POST['id_rol'],$_POST['username'],$_POST['password']);
    //Insertar un registro
    $usuariosController->update($arreglo);
    //Mensaje de registro editado
    Components::messageEdit();
    //Redireccionar al mantenimiento
    header('Location: index.php?contenido=pages/usuarios/usuarios.php');
  }
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
     <title>Editar registro</title>
</head>
<body>

<h3>Editar Registro</h3>
<hr>

<form method="post">
<div class="form-group">
    <label for="id_rol">Rol</label>
    <select class="form-control" name="id_rol" id="id_rol" placeholder="Rol" required>
    <option value="<?php echo $usuarios[0]['id_rol']?>"><?php echo $rol[$usuarios[0]['id_rol']]['nombre']?></option>
    <?php
    for ($i=0; $i <count($rol) ; $i++) { 
      echo "<option value=\"". $rol[$i]['id_rol'] ."\">". $rol[$i]['nombre'] ."</option>";
    }
    ?>
    </select>
  </div>
  <div class="form-group">
    <label for="id_username">Usuario</label>
    <input type="text" class="form-control" name="username" id="id_username" value="<?php echo $usuarios[0]['username'] ?>" placeholder="Usuario" >
  </div>
  <div class="form-group">
    <label for="id_password">Contraseña</label>
    <input type="password" class="form-control" name="password" id="id_password" value="<?php  echo $usuarios[0]['password'] ?>" placeholder="Contraseña" >
  </div>
  <br/>
  <div class="form-group">
  <button type="submit" name="btn_editar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
  <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/usuarios/usuarios.php'" >Regresar <i class="fas fa-share-square"></i></button>
  </div>
</form>

</body>
</html>