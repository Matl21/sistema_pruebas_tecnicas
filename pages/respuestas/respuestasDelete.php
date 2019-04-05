<?php
require_once('./controllers/RespuestasController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$respuestasController = new RespuestasController();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$respuestasController->delete($id);
header('Location: index.php?contenido=pages/respuestas/respuestas.php');
}
?>