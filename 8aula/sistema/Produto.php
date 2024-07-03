<?php

    class Produto extends Sistema
    {
        public $preco;

        public function atributosProduto()
        {
            $this->nome = $_POST['nome'];
            $this->preco = $_POST['produto'];
            $this->mensagem = $_POST['mensagem'];
            echo "Nome: " . $this->nome . "</br>" . "Preço: " . $this->preco . "</br>" . "Mensagem: " . $this->mensagem;
            //echo "Nome: " . $this->getNome . "CPF: " . $this->getCpf . "Mensagem: " . $this->getMensagem;
        }
    }

?>