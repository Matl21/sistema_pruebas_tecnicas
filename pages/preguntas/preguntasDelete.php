<?php
require_once('./controllers/PreguntasController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$preguntasController = new PreguntasController();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$preguntasController->delete($id);
header('Location: index.php?contenido=pages/preguntas/preguntas.php');
}
?>