<?php

class Modalidade
{
    private $nome;
    private $descricao;
    private $imagem;

    public function __construct(){}

    public function create($_nome, $_descricao, $_imagem)
    {
        $this->nome = $_nome;
        $this->descricao = $_descricao;
        $this->imagem = $_imagem;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($_nome)
    {
        $this->nome = $_nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($_descricao)
    {
        $this->descricao = $_descricao;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($_imagem)
    {
        $this->imagem = $_imagem;
    }

    -------
    public function inserirModalidade()
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