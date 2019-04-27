<?php

    class CreateQueries {
        
        function createDatabase() {
            $sql = "CREATE DATABASE IF NOT EXISTS TECNOART;";
            
            return $sql;
        }
        
        function createClientesTable() {
            $sql = "CREATE TABLE IF NOT EXISTS CLIENTES(CLI_COD INT PRIMARY KEY AUTO_INCREMENT, CLI_NOME VARCHAR (30), CLI_EMAIL VARCHAR (40), CLI_SENHA TEXT, CLI_CPF VARCHAR (11));";
            
            return $sql;
        }
        
        function createProdutosTable() {
            $sql = "CREATE TABLE if not exists PRODUTOS (PRO_COD INT PRIMARY KEY AUTO_INCREMENT, PRO_NOME VARCHAR (50), PRO_DESCRICAO VARCHAR (50), PRO_QUANT INT (100));";
            
            return $sql;
        }
        
        function createPedidosTable() {
            $sql = "CREATE TABLE if not exists PEDIDOS (PED_COD INT PRIMARY KEY AUTO_INCREMENT, PED_VALOR FLOAT, PED_NOME VARCHAR (50), PED_STATUS BOOLEAN);";
            
            return $sql;
        }
        
        function createEnderecosTable() {
            $sql = "CREATE TABLE if not exists ENDERECOS (END_COD INT PRIMARY KEY AUTO_INCREMENT, END_ENDERECO VARCHAR (50), END_NUMERO INT, END_CIDADE VARCHAR (20));";
            
            return $sql;
        }
        
        function createCategoriasTable() {
            $sql = "CREATE TABLE if not exists CATEGORIAS (CAT_COD INT PRIMARY KEY AUTO_INCREMENT, CAT_CATEGORIA VARCHAR (40));";
            
            return $sql;
        }
    }