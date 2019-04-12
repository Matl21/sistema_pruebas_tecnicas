<?php
    include_once 'controllers/UsuariosController.php';
    $userSession = new UserSession();
    $userSession->closeSession();
    header("location: ./index.php");
?>