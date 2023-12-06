<?php

class Usuario
{
    private $nome;
    private $email;
    private $dtNascimento;
    private $cidade;
    private $senha;

    public function __construct(){}

    public function create($_nome, $_email, $_dtNascimento = null, $_cidade, $_senha = null)
    {
        $this->nome = $_nome;
        $this->email = $_email;
        $this->dtNascimento = $_dtNascimento;
        $this->cidade = $_cidade;
        $this->senha = md5($_senha);
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
        $this->senha =  $_senha; 
    }
        public function inserirUsuario()
        {
            include("db/conn.php");

            $sql = "CALL piUsuario(:nome, :email, :dtNascimento, :cidade, :senha)";

            $data = 
            [
                'nome' => $this->nome,
                'email' => $this->email,
                'dtNascimento' => $this->dtNascimento,
                'cidade' => $this->cidade,
                'senha' =>$this->senha
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;    
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
 
            $data = 
            [
                'id' => $_id
            ];
 
            $statement = $conn->prepare($sql);
            $statement->execute($data);
 
            return true;
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
        public function atualizarUsuario($id)
        {
            include("db/conn.php");

            $sql = "CALL puUpdateUsuario(:nome, :email, :cidade, :id)";

            $data = 
            [
                'id' => $id,
                'nome' => $this->nome,
                'email' => $this->email,
                'cidade' => $this->cidade
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);
        
            return true;    
        }

        public function autenticarUsuario()
        {

                include("db/conn.php");
                $sql = "CALL psLogin('$this->email', '$this->senha')";
                $stmt = $conn->prepare($sql);

                $stmt->execute(); 
                
                if ($user = $stmt->fetch()) //se encontrar registro
                {
                    return 1;
                }
                else
                {
                    return 0;
                }
        
        }                                            
}       