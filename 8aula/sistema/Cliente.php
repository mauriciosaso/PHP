<?php

    class Cliente extends Sistema
    {
        public $cpf;
    

        public function atributosCliente()
        {
            $this->nome = $_POST['nome'];
            $this->cpf = $_POST['cpf'];
            $this->mensagem = $_POST['mensagem'];
            echo "Nome: " . $this->nome . "</br>" . "CPF: " . $this->cpf . "</br>" . "Mensagem: " . $this->mensagem;
            //echo "Nome: " . $this->getNome . "CPF: " . $this->getCpf . "Mensagem: " . $this->getMensagem;
        }

    }
?>