<?php
require_once('./controllers/EstudianteConvocatoriaController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$estudianteConvocatoriaController = new EstudianteConvocatoriaController();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$estudianteConvocatoriaController->delete($id);
header('Location: index.php?contenido=pages/estudianteConvocatoria/estudianteConvocatoria.php');
}
?>