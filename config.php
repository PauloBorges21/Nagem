<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Protocolo (HTTP ou HTTPS)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
// Host (nome de domínio ou endereço IP do servidor)
$host = $_SERVER['HTTP_HOST'];
// Caminho base da URL (pode variar dependendo da configuração do servidor)
$basePath = $_SERVER['CONTEXT_PREFIX'];
// Se você deseja adicionar mais partes à URL, pode fazer assim
$endpoint = '/nagem';
// Monta a URL completa
$base = $protocol . $host . $basePath . $endpoint;

try {
    $db = new stdClass;
    $db->driver = 'mysql';
    $db->host = 'localhost';
    $db->port = 3306;
    $db->database = 'db_nagem';
    $db->username = 'root';
    $db->password = '';
    $db->unixSocket = '';
    $db->charset = 'utf8';
    $db->options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_PERSISTENT => true
    ];
    $db->dns = "mysql:dbname={$db->database};port={$db->port};host={$db->host}";
    $pdo = new PDO($db->dns, $db->username, $db->password, $db->options);
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}


