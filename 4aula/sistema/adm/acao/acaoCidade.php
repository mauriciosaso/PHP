<?php

    if(isset($_POST['enviar']))
    {
        $cidade = $_POST['cidade'];

        if(empty (trim ($cidade) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroCidade.php'; </script>";
        }
        else
        {
            header("Location: ../cadastroCidade.php");
        }
    }
    else
    {
        echo "Não foi possivel cadastrar";
    }

?>