<?php
require_once('./controllers/UsuariosController.php');
require_once('./controllers/RolController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

echo "<h3>Nuevo Registro</h3>";
echo "<hr>";
//Instacia de la clase controlador
$usuariosController = new UsuariosController();
$rolController = new RolController();

if (isset($_POST['btn_agregar'])) {  
  //Conversion de los datos a arreglo
  $arreglo= EntityArray::usuariosArray(null,$_POST['id_rol'],$_POST['username'],$_POST['password']);
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

<form method="post">
<div class="form-group">
    <label for="id_nombre">Rol</label>
    <select class="form-control" name="nombre" id="id_nombre" placeholder="Nombre" required>
    <?php
    for ($i=0; $i <count($usuar) ; $i++) { 
        # code...
    }
    ?>
    </select>
  </div>
  <div class="form-group">
    <label for="id_descripcion">Descripción</label>
    <textarea type="text" class="form-control" name="descripcion" id="id_descripcion" placeholder="Descripcion" ></textarea>
  </div>
  <div class="form-group">
    <button type="submit" name="btn_agregar" class="btn btn-primary"  >Guardar <i class="far fa-save"></i></button>
  <button type="button" name="btn_regresar" class="btn btn-danger" onclick="window.location.href='index.php?contenido=pages/usuarios/usuarios.php'" >Regresar <i class="fas fa-share-square"></i></button>
  </div>
  </form>

</body>
</html>