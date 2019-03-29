<?php
require_once('./controllers/ConvocatoriaController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$convocatoriaController = new ConvocatoriaController();
if (isset($_GET['id'])) {
$id = $_GET['id'];
$convocatoriaController->delete($id);
header('Location: index.php?contenido=pages/convocatoria/convocatoria.php');
}
?>