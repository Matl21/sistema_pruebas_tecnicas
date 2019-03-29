<?php
require_once('./controllers/RolController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$rolController = new RolController();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$rolController->delete($id);
header('Location: index.php?contenido=pages/rol/rol.php');
}
?>