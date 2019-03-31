<?php
require_once('./controllers/UsuariosController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$usuariosController = new UsuariosController();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$usuariosController->delete($id);
header('Location: index.php?contenido=pages/usuarios/usuarios.php');
}
?>