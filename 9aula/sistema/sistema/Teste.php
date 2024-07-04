<?php

require "../vendor/autoload.php";

    class Teste
    {
        public $nome = "Teste Autoload";

        public function imprimeNome()
        {
            echo $this->nome;
        }
    }

?>