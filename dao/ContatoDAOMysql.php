<?php
require_once 'models/Contatos.php';


class ContatoDAOMysql implements ContatoDAO
{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function findByCpf($cpf)
    {
        if (!empty($cpf)) {
            $sql = "SELECT * FROM contatos WHERE cpf = :cpf";
            try {
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':cpf', $cpf);
                $sql->execute();
                $result = $sql->fetch();
                return $result;
            } catch (PDOException $e) {
                echo "Falha ao pesquisar CPF : {$e->getMessage()}";
            }
        }
    }

    public function findByEmail($email)
    {
        if (!empty($email)) {
            $sql = "SELECT * FROM contatos WHERE email_contato = :email_contato";
            try {
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':email_contato', $email);
                $sql->execute();
                $result = $sql->fetch();
                return $result;
            } catch (PDOException $e) {
                echo "Falha ao pesquisar CPF : {$e->getMessage()}";
            }
        }
    }

    public function insertByCpf($array, $id)
    {
        if (!empty($array)) {
            $sql = "INSERT INTO contatos (id_cliente, nome_contato , email_contato, telefone_contato , cpf) VALUES (:id_cliente, :nome_contato , :email_contato, :telefone_contato , :cpf)";
            try {
                $stmt = $this->pdo->prepare($sql);
                // Vincule os valores do array aos marcadores de posição
                $stmt->bindValue(':id_cliente', $id);
                $stmt->bindValue(':nome_contato', $array['nome']);
                $stmt->bindValue(':email_contato', $array['email']);
                $stmt->bindValue(':telefone_contato', $array['telefone']);
                $stmt->bindValue(':cpf', $array['cpf']);
                // Execute a consulta
                $stmt->execute();
                // Verifique o resultado da inserção, por exemplo, se foi bem-sucedida
                return $stmt->rowCount(); // Retorna o número de linhas afetadas (1 se inserido com sucesso)
            } catch (PDOException $e) {
                echo "Falha ao Gravar Contato : {$e->getMessage()}";
            }
        }
    }

}