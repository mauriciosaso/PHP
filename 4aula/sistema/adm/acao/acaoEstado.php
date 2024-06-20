<?php

    if(isset($_POST['enviar']))
    {
        $estado = $_POST['estado'];

        if(empty (trim ($estado) ) )
        {
            echo "<script> alert('Campo em branco');window.location.href='../cadastroEstado.php'; </script>";
        }
        else
        {
            header("Location: ../cadastroEstado.php");
        }
    }
    else
    {
        echo "Não foi possivel cadastrar";
    }

?>