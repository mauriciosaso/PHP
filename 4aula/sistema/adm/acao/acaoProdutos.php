<?php

    if(isset($_POST['enviar']))
    {
        $produto = $_POST['produto'];
        $categoria = $_POST['categoria'];
        $foto = $_FILES["imagem"]["name"];
        $foto_tamanho = $_FILES["imagem"]["size"];
        $foto_tipo = $_FILES["imagem"]["type"];
        $md5 = md5(time());
        $caminho = "imagem/";
        $mensagem = $_POST['mensagem'];

        if(empty (trim ($produto) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroProdutos.php'; </script>";
        }
        else if(empty (trim ($categoria) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroProdutos.php'; </script>";
        }
        else if(strpos($foto_tipo, "png") && $foto_tamanho <= 10000000)
        {
            move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho . $md5 . $_FILES["imagem"]["name"]);
            //header("Location: ../cadastroProdutos.php");
        }
        else if(empty (trim ($mensagem) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroProdutos.php'; </script>";
        }
        else
        {
            header("Location: ../cadastroProdutos.php");
        }

        echo "<img width='100' src='imagem/" . $md5. $_FILES["imagem"]["name"] . " ' /> ";
        echo "</br>";
        echo "Nome do produto: " . $produto . "</br>" . "Categoria: " . $categoria . "</br>" . "Mensagem: " . $mensagem;
    }
    else
    {
        echo "Não foi possivel cadastrar";
    }

?>