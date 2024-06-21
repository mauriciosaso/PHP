<?php

    if(isset($_POST['enviar']))
    {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $data = $_POST['data'];
        $sexo = $_POST['sexo'];
        $estadoCivil = $_POST['estadoCivil'];
        $renda = $_POST['renda'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];

        if(empty (trim ($nome) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroClientes.php'; </script>";
        }
        else if(empty (trim ($cpf) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroClientes.php'; </script>";
        }
        else if(empty (trim ($data) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroClientes.php'; </script>";
        }
        else if(empty (trim ($sexo) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroClientes.php'; </script>";
        }
        else if(empty (trim ($estadoCivil) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroClientes.php'; </script>";
        }
        else if(empty (trim ($renda) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroClientes.php'; </script>";
        }
        else if(empty (trim ($logradouro) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroClientes.php'; </script>";
        }
        else if(empty (trim ($numero) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroClientes.php'; </script>";
        }
        else if(empty (trim ($complemento) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroClientes.php'; </script>";
        }
        else if(empty (trim ($estado) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroClientes.php'; </script>";
        }
        else if(empty (trim ($cidade) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroClientes.php'; </script>";
        }
        else
        {
            header("Location: ../cadastroClientes.php");
        }
    }
    else
    {
        echo "Não foi possivel cadastrar";
    }

?>