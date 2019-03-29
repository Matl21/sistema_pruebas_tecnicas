<?php
require_once('./controllers/UsuariosController.php');
require_once('./controllers/RolController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$usuariosController = new UsuariosController();
$rolController = new RolController();
//Llenado del arreglo
$usuarios= $usuariosController->read();
$roles = $rolController->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Mantenimiento a Convocatoria</h3>
<hr>

<!-- Boton de nuevo registro -->
<button type="button" class="btn btn-primary" onclick="window.location.href='index.php?contenido=pages/usuarios/usuariosAdd.php'">
Nuevo Registro
<i class="fas fa-pen"></i>
</button>
<br/><br/>

<?php
//Tabla de clase 
echo "<div class=\"table-responsive-md\">
<table class=\"table table-sm table-bordered table-striped table-hover table_mant\">
<tr>
    <th>id</th>
    <th>Rol</th>
    <th>Username</th>
    <th>MD5</th>
    <th colspan='2'>Acciones</th>
</tr>";
for ($i=0; $i <count($usuarios) ; $i++) { 
echo "
<tr>
<td name='id_usuarios'>". $usuarios[$i]['id_usuario'] ."</td>
<td>". $roles[$usuarios[$i]['id_rol']]['nombre'] ."</td>
<td>". $usuarios[$i]['username'] ."</td>
<td>". $usuarios[$i]['password'] ."</td>
<td> 
<input type=\"hidden\" name=\"r\" value=\"usuarios-editar\">
<button type=\"button\" class=\"btn btn-warning\" name=\"btn_tb_editar\" onclick=\"window.location.href='index.php?contenido=pages/usuarios/usuariosUpdate.php&id=".$usuarios[$i]['id_usuario']."'\" ><i class=\"fas fa-edit\"></i></button>
</td>
<td> 
<input type=\"hidden\" name=\"r\" value=\"usuarios-eliminar\">
<a class=\"btn btn-danger\" name=\"btn_tb_eliminar\" onclick=\"javascript:return confirm('¿Seguro de eliminar este registro?');\" href='index.php?contenido=pages/usuarios/usuariosDelete.php&id=".$usuarios[$i]['id_usuario']."' ><i class=\"fas fa-trash-alt\"></i></button> </a>
</td> 
</tr>";
}
echo "</table>
</div>
";


?>
</body>
</html>