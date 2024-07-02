<?php

    require_once "Carro.php";
    require_once "Gol.php";
    require_once "Uno.php";
 
    $carro = new Carro();
    $gol = new Gol();
    $uno = new Uno();

    echo "Indentificação do chassi:" . $gol->chassi . "</br>";
    echo "Cor: " . $gol->cor . "</br>";
    echo "Teto: " . $gol->tipoTeto . "</br>";
    echo "Motor: " . $gol->motor . "</br>";
    echo "Quantidade de rodas: " . $gol->quantRodas . "</br>";
    echo "Tamanho da roda: " . $gol->tamanhoRoda . "</br>";
    echo "</br>";

    echo "Indentificação do chassi: " . $uno->chassi . "</br>";
    echo "Cor: " . $uno->cor . "</br>";
    echo "Teto: " . $uno->tipoTeto . "</br>";
    echo "Motor: " . $uno->motor . "</br>";
    echo "Quantidade de rodas: " . $uno->quantRodas . "</br>";
    echo "Tamanho da roda: " . $uno->tamanhoRoda . "</br>";

   

?>