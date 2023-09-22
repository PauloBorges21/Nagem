<?php
require_once 'dao/ClienteDAOMysql.php';
require_once 'dao/ContatoDAOMysql.php';

class Contatos
{
    public $array;
    public $base;
    public $id;
    public $id_cliente;
    public $nome_contato;
    public $email_contato;
    public $telefone_contato;
    public $cpf;
}
interface ContatoDAO
{
    public function findByCpf($cpf);
    public function insertByCpf($array,$id);

}