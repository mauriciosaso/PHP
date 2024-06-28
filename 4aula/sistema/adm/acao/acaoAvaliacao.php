<?php

    if(isset($_POST['enviar']))
    {
        $razao = $_POST['razao'];
        $cnpj = $_POST['cnpj'];
        $inscricao = $_POST['inscricao'];
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $municipio = $_POST['municipio'];
        $uf = $_POST['uf'];
        $cep = $_POST['cep'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $funcao = $_POST['funcao'];
        $telefone2 = $_POST['telefone2'];
        $email2 = $_POST['email2'];
        $nome2 = $_POST['nome2'];
        $funcao2 = $_POST['funcao2'];
        $telefone3 = $_POST['telefone3'];
        $email3 = $_POST['email3'];

        if(empty (trim ($razao) ) )
        {
            echo "<script> alert('Campo em branco1');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($cnpj) ) )
        {
            echo "<script> alert('Campo em branco2');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($inscricao) ) )
        {
            echo "<script> alert('Campo em branco3');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($logradouro) ) )
        {
            echo "<script> alert('Campo em branco4');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($bairro) ) )
        {
            echo "<script> alert('Campo em branco5');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($municipio) ) )
        {
            echo "<script> alert('Campo em branco6');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($uf) ) )
        {
            echo "<script> alert('Campo em branco7');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($cep) ) )
        {
            echo "<script> alert('Campo em branco8');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($telefone) ) )
        {
            echo "<script> alert('Campo em branco9');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($email) ) )
        {
            echo "<script> alert('Campo em branco10');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($nome) ) )
        {
            echo "<script> alert('Campo em branco11');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($funcao) ) )
        {
            echo "<script> alert('Campo em branco12');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($telefone2) ) )
        {
            echo "<script> alert('Campo em branco13');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($email2) ) )
        {
            echo "<script> alert('Campo em branco14');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($nome2) ) )
        {
            echo "<script> alert('Campo em branco15');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($funcao2) ) )
        {
            echo "<script> alert('Campo em branco16');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($telefone3) ) )
        {
            echo "<script> alert('Campo em branco17');window.location.href='../avaliacao.php'; </script>";
        }
        else if(empty (trim ($email3) ) )
        {
            echo "<script> alert('Campo em branco18');window.location.href='../avaliacao.php'; </script>";
        }
        else
        {
            echo "Razão Social: " . $razao . "</br>" . "CNPJ: " . $cnpj . "</br>" . "Inscrição Estadual: " . $inscricao . "Logradouro: " . $logradouro . "</br>" . "Bairro: " . $bairro . "Município: " . $municipio . "</br>" . "UF: " . $uf . "CEP: " . $cep . "</br>" . "Telefone: " . $telefone . "</br>" . "E-mail: " . $email . "</br>";
            echo "</br>";
            echo "Representante 1" . "</br>";
            echo "Nome: " . $nome . "</br>" . "Função: " . $funcao . "</br>" . "Telefone: " . $telefone2 . "</br>" . "E-mail:: " . $email2 . "</br>";
            echo "</br>";
            echo "Representante 2" . "</br>";
            echo "Nome: " . $nome2 . "</br>" . "Função: " . $funcao2 . "</br>" . "Telefone: " . $telefone3 . "</br>" . "E-mail: " . $email3 . "</br>";
        }
    }
    else
    {
        echo "Não foi possivel cadastrar";
    }

?>