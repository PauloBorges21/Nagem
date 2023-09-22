<?php
require_once 'dao/ClienteDAOMysql.php';

class Clientes
{
//    private $pdo;
//    private $base;
//    private $nome;
//    private $cnpj;
//    private $endereco;
//    private $numero;
//    private $bairro;
//    private $cidade;
//    private $estado;
//    private $cep;
//    private $ativo;
//
//    /**
//     * @param mixed $nome
//     */
//    public function setNome($nome)
//    {
//        $this->nome = $nome;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getNome()
//    {
//        return $this->nome;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getAtivo()
//    {
//        return $this->ativo;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getBairro()
//    {
//        return $this->bairro;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getBase()
//    {
//        return $this->base;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getCep()
//    {
//        return $this->cep;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getCidade()
//    {
//        return $this->cidade;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getCnpj()
//    {
//        return $this->cnpj;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getEndereco()
//    {
//        return $this->endereco;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getEstado()
//    {
//        return $this->estado;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getNumero()
//    {
//        return $this->numero;
//    }
//
//    /**
//     * @param mixed $ativo
//     */
//    public function setAtivo($ativo)
//    {
//        $this->ativo = $ativo;
//    }
//
//    /**
//     * @param mixed $bairro
//     */
//    public function setBairro($bairro)
//    {
//        $this->bairro = $bairro;
//    }
//
//    /**
//     * @param mixed $base
//     */
//    public function setBase($base)
//    {
//        $this->base = $base;
//    }
//
//    /**
//     * @param mixed $cep
//     */
//    public function setCep($cep)
//    {
//        $this->cep = $cep;
//    }
//
//    /**
//     * @param mixed $cidade
//     */
//    public function setCidade($cidade)
//    {
//        $this->cidade = $cidade;
//    }
//
//    /**
//     * @param mixed $cnpj
//     */
//    public function setCnpj($cnpj)
//    {
//        $this->cnpj = $cnpj;
//    }
//
//    /**
//     * @param mixed $endereco
//     */
//    public function setEndereco($endereco)
//    {
//        $this->endereco = $endereco;
//    }
//
//    /**
//     * @param mixed $estado
//     */
//    public function setEstado($estado)
//    {
//        $this->estado = $estado;
//    }
//
//    /**
//     * @param mixed $numero
//     */
//    public function setNumero($numero)
//    {
//        $this->numero = $numero;
//    }
//
////    public function __construct(PDO $pdo)
////    {
////        $this->base;
////        $this->pdo;
////    }
////
////    public function checkCliente($cnpj)
////    {
////        $clienteDAOMysql = new ClienteDAOMysql($this->pdo);
////        $cliente = $clienteDAOMysql->checkCliente($this->cnpj);
////    }
////
////    public function validadeCnpj($cnpj)
////    {
////        $clienteDAOMysql = new ClienteDAOMysql($this->pdo);
////    }
//}
  //  private $pdo;
    public $array;
    public $base;
    public $id;
    public $nome;
    public $cnpj;
    public $endereco;
    public $numero;
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;
    public $ativo;
}
interface ClienteDAO
{
    public function findByCnpj($cnpj);
    public function insertByCnpj($array);
    public function editByCnpj($array);
    public function getListCliente();
    public function getAllClienteContato($id);
}