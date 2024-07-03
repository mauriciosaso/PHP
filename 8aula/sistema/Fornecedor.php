<?php

    class Fornecedor extends Sistema
    {
        public $rua;
        public $bairro;
        public $numero;
        public $cnpj;
    

        public function atributosFornecedor()
        {
            $this->nome = $_POST['nome'];
            $this->rua = $_POST['rua'];
            $this->bairro = $_POST['bairro'];
            $this->numero = $_POST['numero'];
            $this->cnpj = $_POST['cnpj'];
            $this->telefone = $_POST['telefone'];
            $this->mensagem = $_POST['mensagem'];
            echo "Nome: " . $this->nome . "</br>" . "Rua: " . $this->rua . "</br>" . "Bairro: " . $this->bairro . "</br>" . "Numero: " . $this->numero . "</br>" . "CNPJ: " . $this->cnpj . "</br>" . "Telefone: " . $this->telefone . "</br>" . "Mensagem: " . $this->mensagem . "</br>";
            //echo "Nome: " . $this->getNome . "CPF: " . $this->getCpf . "Mensagem: " . $this->getMensagem;
        }

    }
?>