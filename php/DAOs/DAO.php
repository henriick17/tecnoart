<?php

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
            $this->conexao = mysqli_connect($this->host, $this->user, $this->pswd, $this->bcdd) or die("Erro ao conectar ao banco de dados.");
        }

    }

?>