<?php

    if(isset($_POST['enviar']))
    {
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        $area2 = $_POST['area2'];

        echo $nome . " " . "<br>";
        echo $estado . " " . "<br>";
        echo $area2 . " " . "<br>";
    }
    else
    {
        echo "Não clicou no botão enviar";
    }
?>