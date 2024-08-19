<?php

    require_once "../../vendor/autoload.php";

    session_start();
    $usuario = new Usuario();
    
    if(isset($_SESSION['logado']) == "logar")
    {
        $usuario->deslogarUsuario();
        header("Location: logar.php");
    }
?>