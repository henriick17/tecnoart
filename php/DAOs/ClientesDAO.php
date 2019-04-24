<?php

    include_once 'DAO.php';

    class ClientesDAO extends DAO {

        function ClientesDAO() {
            $this->criarConexao();
        }

        function selectAll() {
            $sql = "SELECT * FROM CLIENTES;";

            $resultado = mysqli_query($this->conexao, $sql);
        }

    }

?>