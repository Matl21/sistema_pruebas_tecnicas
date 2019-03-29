<?php
require_once('./controllers/EstudianteController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$estudianteController = new EstudianteController();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$estudianteController->delete($id);
header('Location: index.php?contenido=pages/estudiantes/estudiantes.php');
}
?>