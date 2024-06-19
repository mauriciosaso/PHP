<?php

    if(isset($_POST['enviar']))
    {
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        $area2 = $_POST['area2'];
        $idade = $_POST['idade'];

        echo "Nome: " . $nome . " " . "<br>";
        echo "Idade: " . $idade . " " . "<br>";
        echo "Estado: " . $estado . " " . "<br>";
        echo "Descrição: " . $area2 . " " . "<br>";
    }
    else
    {
        echo "Não clicou no botão enviar";
    }
?>