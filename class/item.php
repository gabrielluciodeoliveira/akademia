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

        public function listarModalidade()
        {
           try 
           {
                include("db/conn.php");

                $sql = "CALL pslistarModalidade('')";
                $data = $conn->query($sql)->fetchAll();

                return $data;
           } 
           catch (Exception $e) 
           {
               return false;
           }
        }
    }

?>