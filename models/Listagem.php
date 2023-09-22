<?php

require_once 'dao/ClienteDAOMysql.php';
require_once 'dao/ContatoDAOMysql.php';

class Listagem
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getlistC()
    {
        $clienteDao = new ClienteDAOMysql($this->pdo);
        return $list = $clienteDao->getListCliente();
    }

    public function getCliente($id)
    {
        $clienteDao = new ClienteDAOMysql($this->pdo);
        return $obj = $clienteDao->getCliente($id);
    }

    public function getAllClientesContato($id)
    {
        $clienteDao = new ClienteDAOMysql($this->pdo);
        return $obj = $clienteDao->getAllClienteContato($id);
    }

}