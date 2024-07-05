<?php

    require "../../vendor/autoload.php";
    //__DIR__ . "../../vendor/autoload.php";

    $composer = new Teste();
    $composer1 = new Classe1();
    $composer2 = new Classe2();
    $composer3 = new Classe3();
    $composer4 = new Classe4();
    $composer5 = new Classe5();
    $composer6 = new Classe6();
    $composer7 = new Classe7();
    $composer8 = new Classe8();
    $composer9 = new Classe9();

    echo $composer->imprimeNome() . "</br>";
    echo $composer1->imprimeClasse1() . "</br>";
    echo $composer2->imprimeClasse2() . "</br>";
    echo $composer3->imprimeClasse3() . "</br>";
    echo $composer4->imprimeClasse4() . "</br>";
    echo $composer5->imprimeClasse5() . "</br>";
    echo $composer6->imprimeClasse6() . "</br>";
    echo $composer7->imprimeClasse7() . "</br>";
    echo $composer8->imprimeClasse8() . "</br>";
    echo $composer9->imprimeClasse9() . "</br>";


?>