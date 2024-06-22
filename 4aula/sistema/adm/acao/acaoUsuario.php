<?php
    if(isset($_POST['enviar'])){

        $nome=$_POST['nome'];
        $cpf=$_POST['CPF'];
        $endereco=$_POST['endereco'];
        $nivel=$_POST['nivel'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $status=$_POST['status'];

        if(empty (trim ($nome) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroUsuario.php'; </script>";
        }
        else if(empty (trim ($cpf) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroUsuario.php'; </script>";
        }
        else if(empty (trim ($endereco) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroUsuario.php'; </script>";
        }
        else if(empty (trim ($nivel) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroUsuario.php'; </script>";
        }
        else if(empty (trim ($email) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroUsuario.php'; </script>";
        }
        else if(empty (trim ($senha) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroUsuario.php'; </script>";
        }
        else if(empty (trim ($status) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroUsuario.php'; </script>";
        }
        else
        {
            header("Location: ../cadastroUsuario.php");
        }

    }
    else{
        echo"Não foi possviel cadastrar";
    }