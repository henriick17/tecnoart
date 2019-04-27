<?php

    require_once 'queries/CreateQueries.php';

    class DAO {

        private $conexao;
        private $host = "localhost";
        private $user = "root";
        private $pswd = "";
        private $bcdd = "TECNOART";

        function DAO () {
            
            $this->criarConexao();
        }

        function criarConexao() {
            $this->conexao = mysqli_connect($this->host, $this->user, $this->pswd, "") or die("Erro ao conectar ao banco de dados.");
            
            $createQueries = new CreateQueries();
            
            mysqli_query($this->conexao, $createQueries->createDatabase());
            
            $this->conexao = mysqli_connect($this->host, $this->user, $this->pswd, $this->bcdd) or die("Erro ao conectar ao banco de dados.");
            
            mysqli_query($this->conexao, $createQueries->createClientesTable());
            mysqli_query($this->conexao, $createQueries->createProdutosTable());
            mysqli_query($this->conexao, $createQueries->createPedidosTable());
            mysqli_query($this->conexao, $createQueries->createEnderecosTable());
            mysqli_query($this->conexao, $createQueries->createCategoriasTable());
        }

    }

?>