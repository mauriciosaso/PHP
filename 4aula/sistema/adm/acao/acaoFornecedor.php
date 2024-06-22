<?php

    if(isset($_POST['enviar']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $numeroCelular = $_POST['numeroCelular'];
        $numeroTelefone = $_POST['numeroTelefone'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $status = $_POST['status'];

        if(empty (trim ($status) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroFornecedores.php'; </script>";
        }
        else if(empty (trim ($nome) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroFornecedores.php'; </script>";
        }
        else if(empty (trim ($email) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroFornecedores.php'; </script>";
        }
        else if(empty (trim ($cpf) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroFornecedores.php'; </script>";
        }
        else if(empty (trim ($numeroCelular) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroFornecedores.php'; </script>";
        }
        else if(empty (trim ($numeroTelefone) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroFornecedores.php'; </script>";
        }
        else if(empty (trim ($cep) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastrocadastroFornecedoresClientes.php'; </script>";
        }
        else if(empty (trim ($logradouro) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroFornecedores.php'; </script>";
        }
        else if(empty (trim ($numero) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroFornecedores.php'; </script>";
        }
        else if(empty (trim ($bairro) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroFornecedores.php'; </script>";
        }
        else if(empty (trim ($cidade) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroFornecedores.php'; </script>";
        }
        else if(empty (trim ($uf) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroFornecedores.php'; </script>";
        }
        else
        {
            header("Location: ../cadastroFornecedores.php");
        }
    }
    else
    {
        echo "Não foi possivel cadastrar";
    }

?>