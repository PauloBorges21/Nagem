<?php
require_once 'models/Clientes.php';


class ClienteDAOMysql implements ClienteDAO
{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    private function generateCliente($array)
    {
        $c = new Clientes();
        $c->id = $array->id ?? 0;
        $c->nome = $array->nome ?? '';
        $c->cnpj = $array->cnpj ?? '';
        $c->endereco = $array->endereco ?? '';
        $c->numero = $array->numero ?? '';
        $c->bairro = $array->bairro ?? '';
        $c->cidade = $array->cidade ?? '';
        $c->estado = $array->estado ?? '';
        $c->cep = $array->cep ?? '';
        $c->ativo = $array->ativo ?? 0;

        return $c;
    }

    public function findByCnpj($cnpj)
    {
        if (!empty($cnpj)) {
            $sql = "SELECT * FROM clientes WHERE cnpj = :cnpj and ativo = 1";
            try {
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':cnpj', $cnpj);
                $sql->execute();
                $result = $sql->fetch();
                return $result;

            } catch (PDOException $e) {
                echo "Falha ao pesquisar CNPJ : {$e->getMessage()}";
            }
        }
    }

    public function insertByCnpj($array)
    {
        if (!empty($array)) {
            $sql = "INSERT INTO clientes (nome, cnpj , endereco, numero , bairro , cidade , estado , cep , ativo) VALUES (:nome, :cnpj , :endereco, :numero , :bairro , :cidade , :estado , :cep ,1)";
            try {
                $stmt = $this->pdo->prepare($sql);

                // Vincule os valores do array aos marcadores de posição
                $stmt->bindValue(':nome', $array['nome']);
                $stmt->bindValue(':cnpj', $array['cnpj']);
                $stmt->bindValue(':endereco', $array['endereco']);
                $stmt->bindValue(':numero', $array['numero']);
                $stmt->bindValue(':bairro', $array['bairro']);
                $stmt->bindValue(':cidade', $array['cidade']);
                $stmt->bindValue(':estado', $array['estado']);
                $stmt->bindValue(':cep', $array['cep']);

                // Execute a consulta
                $stmt->execute();

                // Verifique o resultado da inserção, por exemplo, se foi bem-sucedida
                return $stmt->rowCount(); // Retorna o número de linhas afetadas (1 se inserido com sucesso)
            } catch (PDOException $e) {
                echo "Falha ao pesquisar CNPJ : {$e->getMessage()}";
            }
        }
    }

    public function editByCnpj($array)
    {
        if (!empty($array)) {
            $sql = "UPDATE clientes SET nome = :nome, endereco = :endereco, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep WHERE cnpj = :cnpj";
            try {
                $stmt = $this->pdo->prepare($sql);

                // Vincule os valores do array aos marcadores de posição
                $stmt->bindValue(':nome', $array['nome']);
                $stmt->bindValue(':endereco', $array['endereco']);
                $stmt->bindValue(':numero', $array['numero']);
                $stmt->bindValue(':bairro', $array['bairro']);
                $stmt->bindValue(':cidade', $array['cidade']);
                $stmt->bindValue(':estado', $array['estado']);
                $stmt->bindValue(':cep', $array['cep']);
                $stmt->bindValue(':cnpj', $array['cnpj']); // A chave primária para identificar o registro

                // Execute a consulta
                $stmt->execute();
                // Verifique o resultado da atualização, por exemplo, se foi bem-sucedida
                return $stmt->rowCount(); // Retorna o número de linhas afetadas (0 se nenhum registro foi atualizado)
            } catch (PDOException $e) {
                echo "Falha ao atualizar registro: {$e->getMessage()}";
            }
        }
    }

    public function getListCliente()
    {
        // TODO: Implement getListCliente() method.
        $sql = "SELECT * FROM clientes WHERE ativo = 1";
        try {
            $sql = $this->pdo->prepare($sql);
            $sql->execute();
            $result = $sql->fetchAll();
            return $result;

        } catch (PDOException $e) {
            echo "Falha ao pesquisar CNPJ : {$e->getMessage()}";
        }
    }

    public function getCliente($id)
    {
        if (!empty($id)) {
            $sql = "SELECT * FROM clientes WHERE id = :id and ativo = 1";
            try {
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id', $id);
                $sql->execute();
                $result = $sql->fetch();
                return $result;
            } catch (PDOException $e) {
                echo "Falha ao pesquisar CNPJ : {$e->getMessage()}";
            }
        }
    }

    public function getAllClienteContato($id)
    {
        if (!empty($id)) {
            $sql = "SELECT DISTINCT 
                    clientes.*,
                    contatos.id AS id_contatos,
                    contatos.* 
                    FROM clientes
                    LEFT JOIN contatos ON clientes.id = contatos.id_cliente
                    WHERE clientes.ativo = 1 AND clientes.id = :id";
            try {
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id', $id);
                $sql->execute();
                $result = $sql->fetchAll();
                return $result;
            } catch (PDOException $e) {
                echo "Falha ao pesquisar dados cliente e contato : {$e->getMessage()}";
            }
        }
    }
}
