<?php

    if(isset($_POST['enviar']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        mail($email, $assunto . " " . $nome, $mensagem);
        echo "<script> alert('Email enviado com sucesso');window.location.href='../envioEmail.php'; </script>";

        if(empty (trim ($nome) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../envioEmail.php'; </script>";
        }
        else if(empty (trim ($email) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../envioEmail.php'; </script>";
        }
        else if(empty (trim ($assunto) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../envioEmail.php'; </script>";
        }
        else if(empty (trim ($mensagem) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../envioEmail.php'; </script>";
        }
        else
        {
            header("Location: ../envioEmail.php");
        }
    }
    else
    {
        header("Location: ../envioEmail.php");
    }

?>