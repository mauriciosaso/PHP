<?php

    require "../../vendor/autoload.php";

    class Cliente
    {
        private $id;
        private $nome;
        private $estado;
        private $mensagem;

                /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        public function setId($id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of estado
         */
        public function getEstado()
        {
                return $this->estado;
        }

        public function setEstado($estado): self
        {
                $this->estado = $estado;

                return $this;
        }

        /**
         * Get the value of mensagem
         */
        public function getMensagem()
        {
                return $this->mensagem;
        }

        public function setMensagem($mensagem): self
        {
                $this->mensagem = $mensagem;

                return $this;
        }

        //Chamar conexão com banco de dados
        public function __construct()
        {
            $this->con = new Conexao();
            $this->objfn = new Funcoes(); 
        }


        //Método para inserir cliente
        public function inserirCliente($dados)
        {
            try
            {
                $this->nome = $dados['nome'];
                $this->estado = $dados['estado'];
                $this->mensagem = $dados['mensagem'];

                $cst = $this->con->conectar()->prepare("INSERT INTO clientes (nome, estado, mensagem) VALUES (:nome, :estado, :mensagem)");
                $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                $cst->bindParam(":estado", $this->estado, PDO::PARAM_INT);
                $cst->bindParam(":mensagem", $this->mensagem, PDO::PARAM_STR);

                if($cst->execute())
                {
                    return "ok";
                }
                else
                {
                    echo "Não deu";
                }
            }
            catch(PDOException $ex)
            {
                echo $ex;
            }
        }

        //Método para listar clientes
        public function selecionarCliente()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT i.id, i.nome, i.mensagem, t.estado
                FROM clientes i
                JOIN estado t on t.id = i.estado"); 
                $cst->execute();

                return $cst->fetchAll();
            }

            catch(PDOException $ex)
            {
                echo $ex;
            }
        }

        public function selecionarEstado()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT * FROM estado"); 
                $cst->execute();

                return $cst->fetchAll();
            }

            catch(PDOException $ex)
            {
                echo $ex;
            }
        }

        //Método para recuperar o ID do banco de dados
        public function selecionaId($dado)
        {
            try
            {
                $this->id=$this->objfcn->base64($dado, tipo:2);
                $cst = $this->con->conectar()->prepare("SELECT id, nome, estado, mensagem FROM clientes WHERE id: idCliente");
                $cst->bindParam(":idCliente", $this->id, PDO::PARAM_INT);
                $cst->execute();

                return $cst->fetch();
            }
            catch(PDOException $ex)
            {
                echo $ex;
            }          
        }

        //Método para editar Cliente
        public function editarCliente($dados)
        {
            try
            {
                $this->id=$this->objfcn->base64($dados['func'], tipo:2);
                $this->nome = $dados['nome'];
                $this->estado = $dados['estado'];
                $this->mensagem = $dados['mensagem'];

                $cst = $this->con->conectar()->prepare("UPDATE clientes SET nome=:nome, estado=:estado, mensagem=:mensagem WHERE id: idCliente");
                $cst->bindParam(":idCliente", $this->id, PDO::PARAM_INT);
                $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                $cst->bindParam(":estado", $this->estado, PDO::PARAM_STR);
                $cst->bindParam(":mensagem", $this->mensagem, PDO::PARAM_STR);
            
                if($cst->execute())
                {
                    return "Editar";
                }
                else
                {
                    echo "Não deu";
                }

            }
            catch(PDOException $ex)
            {
                echo $ex;
            }          
        }

        public function deletarId($dados)
        {
            try
            {
                $this->id=$this->objfcn->base64($dados, tipo:2);
                $cst = $this->con->conectar()->prepare("DELETE FROM clientes WHERE id: idCliente");
                $cst->bindParam(":idCliente", $this->id, PDO::PARAM_INT);
                $cst->execute();

                return $cst->fetch();

                if($cst->execute())
                {
                    return "Deletar";
                }
                else
                {
                    echo "Não deu";
                }
            }
            catch(PDOException $ex)
            {
                echo $ex;
            }          
        }
    }
        

?>