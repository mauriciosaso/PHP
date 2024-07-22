<?php

    require "../../vendor/autoload.php";

    class Fornecedor
    {
        private $id;
        private $nome;
        private $pais;
        private $estado;
        private $cidade;
        private $telefone;
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
         * Get the value of pais
         */
        public function getPais()
        {
                return $this->pais;
        }
        public function setPais($pais): self
        {
                $this->pais = $pais;

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
         * Get the value of cidade
         */
        public function getCidade()
        {
                return $this->cidade;
        }
        public function setCidade($cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }

        /**
         * Get the value of telefone
         */
        public function getTelefone()
        {
                return $this->telefone;
        }
        public function setTelefone($telefone): self
        {
                $this->telefone = $telefone;

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
        public function inserirFornecedor($dados)
        {
            try
            {
                $this->nome = $dados['nome'];
                $this->pais = $dados['pais'];
                $this->estado = $dados['estado'];
                $this->cidade = $dados['cidade'];
                $this->telefone = $dados['telefone'];
                $this->mensagem = $dados['mensagem'];

                $cst = $this->con->conectar()->prepare("INSERT INTO fornecedor (nome, pais, estado, cidade, telefone, mensagem) VALUES (:nome, :pais, :estado, :cidade, :telefone, :mensagem)");
                $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                $cst->bindParam(":pais", $this->pais, PDO::PARAM_INT);
                $cst->bindParam(":estado", $this->estado, PDO::PARAM_INT);
                $cst->bindParam(":cidade", $this->cidade, PDO::PARAM_INT);
                $cst->bindParam(":telefone", $this->telefone, PDO::PARAM_STR);
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
        public function selecionarFornecedor()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT i.id, i.nome, i.telefone, i.mensagem, t.estado, p.pais, c.cidade
                FROM fornecedor i
                JOIN estado t on t.id = i.estado
                JOIN cidade c on c.id = i.cidade
                JOIN pais p on p.id = i.pais"); 
                $cst->execute();

                return $cst->fetchAll();
            }

            catch(PDOException $ex)
            {
                echo $ex;
            }
        }

        public function selecionarPais()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT * FROM pais"); 
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

        public function selecionarCidade()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT * FROM cidade"); 
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
                $cst = $this->con->conectar()->prepare("SELECT id, nome, pais, estado, cidade, telefone, mensagem FROM fornecedor WHERE id: idFornecedor");
                $cst->bindParam(":idFornecedor", $this->id, PDO::PARAM_INT);
                $cst->execute();

                return $cst->fetch();
            }
            catch(PDOException $ex)
            {
                echo $ex;
            }          
        }

        //Método para editar Cliente
        public function editarFornecedor($dados)
        {
            try
            {
                $this->id=$this->objfcn->base64($dados['func'], tipo:2);
                $this->nome = $dados['nome'];
                $this->pais = $dados['pais'];
                $this->estado = $dados['estado'];
                $this->cidade = $dados['cidade'];
                $this->telefone = $dados['telefone'];
                $this->mensagem = $dados['mensagem'];

                $cst = $this->con->conectar()->prepare("UPDATE fornecedor SET nome=:nome, pais=:pais, estado=:estado, cidade=:cidade, telefone=:telefone, mensagem=:mensagem WHERE id: idFornecedor");
                $cst->bindParam(":idFornecedor", $this->id, PDO::PARAM_INT);
                $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                $cst->bindParam(":pais", $this->pais, PDO::PARAM_INT);
                $cst->bindParam(":estado", $this->estado, PDO::PARAM_INT);
                $cst->bindParam(":cidade", $this->cidade, PDO::PARAM_INT);
                $cst->bindParam(":telefone", $this->telefone, PDO::PARAM_STR);
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
                $cst = $this->con->conectar()->prepare("DELETE FROM fornecedor WHERE id: idFornecedor");
                $cst->bindParam(":idFornecedor", $this->id, PDO::PARAM_INT);
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