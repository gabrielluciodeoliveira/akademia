<?php

class Usuario
{
    private $nome;
    private $email;
    private $dtNascimento;
    private $cidade;
    private $senha;

    public function __construct(){}

    public function create($_nome, $_email, $_dtNascimento, $_cidade, $_senha)
    {
        $this->nome = $_nome;
        $this->email = $_email;
        $this->dtNascimento = $_dtNascimento;
        $this->cidade = $_cidade;
        $this->senha = $_senha;
    }
        public function getNome()
        {
            return $this ->nome;
        }
        public function setNome()
        {
            $this->nome = $_nome;
        }
        public function inserirUsuario()
        {
            $sql = "CALL piUsuario(:nome, :email. :dtNascimento, :cidade, :senha)"

            $data = 
            [
                'nome' => $this ->nome
                'email' => $this ->email
                'dtNascimento' => $this ->dtNascimento
                'cidade' => $this ->cidade
                'senha' =>$this ->senha
            ]

            $statement = $conn->prepare($sql);
            $statement ->execute($sql);
        }

        public function Listarusuario()
        {
            include("db/conn.php");

            $sql = "CALL Listarusuario('')";
            $data = $conn->query($sql)->fetchAll();

            return $data;
        }

        public function excluirUsuario($_id)

        {
            include("db/conn.php");
            $sql = "CALL delUsuario(:id)";
 
            $data = [
                'id' => $_id
            ];
 
            $statement = $conn->prepare($sql);
            $statement->execute($data);
 
            return true;
        }