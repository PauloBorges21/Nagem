<?php

require_once 'dao/ClienteDAOMysql.php';
require_once 'dao/ContatoDAOMysql.php';

class Authc
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function validateCnpj($cnpj)
    {
        $clienteDao = new ClienteDAOMysql($this->pdo);
        return $cnpjResult = $clienteDao->findByCnpj($cnpj);
    }

    public function cnpjExists($cnpj)
    {
        $clienteDao = new ClienteDAOMysql($this->pdo);
        if ($clienteDao->findByCnpj($cnpj)) {
            return true;
        } else {
            return false;
        }
    }

    public function cpfExists($cpf)
    {
        $contatoDao = new ContatoDAOMysql($this->pdo);
        if ($contatoDao->findByCpf($cpf)) {
            return true;
        } else {
            return false;
        }
    }

    public function emailExists($email)
    {
        $contatoDao = new ContatoDAOMysql($this->pdo);
        if ($contatoDao->findByEmail($email)) {
            return true;
        } else {
            return false;
        }
    }

    public function validateCpf($cpf)
    {
        $contatoDao = new ContatoDAOMysql($this->pdo);
        return $cpfResult = $contatoDao->findByCpf($cpf);
    }

    public function validateEmail($email)
    {
        $contatoDao = new ContatoDAOMysql($this->pdo);
        return $emailResult = $contatoDao->findByEmail($email);
    }

    public function registerByCnpj($array)
    {
        $clienteDao = new ClienteDAOMysql($this->pdo);
        $nCliente = new Clientes();
        $nCliente = $array;
        $clienteDao->insertByCnpj($nCliente);
        return $nCliente;
    }

    public function editByCnpj($array)
    {
        $clienteDao = new ClienteDAOMysql($this->pdo);
        $nCliente = new Clientes();
        $nCliente = $array;
        $clienteDao->editByCnpj($nCliente);
        return $nCliente;
    }

    public function registerByCpf($array,$id)
    {
        $contatoDao = new ContatoDAOMysql($this->pdo);
        $nContato = new Contatos();
        $nContato = $array;
        $contatoDao->insertByCpf($nContato,$id);
        return $nContato;
    }
}