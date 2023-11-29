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
        return $this->nome;
    }

    public function setNome($_nome)
    {
        $this->nome = $_nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($_email)
    {
        $this->email = $_email;
    }

    public function getdtNascimento()
    {
        return $this->dtNascimento;
    }

    public function setdtNascimento($_dtNascimento)
    {
        $this->dtNascimento = $_dtNascimento;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($_cidade)
    {
        $this->cidade = $_cidade;
    }
    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($_senha)
    {
        $this->senha = md5 ($_senha); //$this->senha = $_senha;
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

        public function ListarUsuario()
        {
            include("db/conn.php");

            $sql = "CALL psListarUsuario('')";
            $data = $conn->query($sql)->fetchAll();

            return $data;
        }

        public function excluirUsuario($_id)

        {
            include("db/conn.php");
            $sql = "CALL pdexcluirUsuario(:id)";
 
            $data = [
                'id' => $_id
            ];
 
            $statement = $conn->prepare($sql);
            $statement->execute($data);
 
            return true;
        }

        public function atualizarUsuario($_id)
        {
            include("db/conn.php");
            $sql = "CALL puUpdateUsuario(:id, :email, :cidade :senha)"; //puxa a procedure do sql
            $data = $conn->query($sql)->fetchAll();
        }

        public function buscarUsuario($_id)
        {
            include("db/conn.php");
 
            $sql = "CALL psbuscarUsuario('$_id')";
            $data = $conn->query($sql)->fetchAll();
 
            foreach ($data as $item) 
            {
                $this->nome = $item["nome"];
                $this->email = $item["email"];
                $this->dtNascimento = $item["dtNascimento"];
                $this->cidade = $item["cidade"];
                $this->senha = $item["senha"];
            }
 
            return true;
 
        }