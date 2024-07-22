<?php

    require_once "../../vendor/autoload.php";

    session_start();
    $usuario = new Usuario();
    
    if($_SESSION['logado'] == "logar")
    {
        $usuario->deslogarUsuario();
        header("Location: logar.php");
    }
?>