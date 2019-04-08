<?php
    include_once 'UsuariosController.php';
    $userSession = new UserSession();
    $userSession->closeSession();
    header("location: ./index.php");
?>