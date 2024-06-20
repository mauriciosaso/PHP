<?php

    if(isset($_POST['enviar']))
    {
        $pais = $_POST['pais'];

        if(empty (trim ($pais) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroPais.php'; </script>";
        }
        else
        {
            header("Location: ../cadastroPais.php");
        }
    }
    else
    {
        echo "Não foi possivel cadastrar";
    }

?>