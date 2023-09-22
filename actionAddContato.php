<?php
require 'config.php';
require 'autoload.php';

$a = new Authc($pdo);
$id = filter_input(INPUT_POST, 'proc', FILTER_VALIDATE_INT);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form = array();
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'contato') === 0) {
            // Remove "contato-" do início do índice
            $column = str_replace('contato-', '', $key);

            if ($column === 'email' && filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $form[$column] = filter_var($value, FILTER_SANITIZE_EMAIL);
            } elseif ($column === 'telefone') {
                // Remove todos os caracteres não numéricos do número de telefone
                $form[$column] = preg_replace('/[^0-9]/', '', $value);
            } else {
                $form[$column] = filter_var($value, FILTER_SANITIZE_STRING);
            }
        }
    }

    $existCpf = $a->cpfExists($form['cpf']);
    if ($existCpf) {
        header("Location: " . $base . "/");
        exit();
    }
    $existEmail = $a->emailExists($form['email']);
    if ($existEmail) {
        header("Location: " . $base . "/");
        exit();
    }
    $insertC = $a->registerByCpf($form ,$id);
    header("Location: " . $base . "/list-clientes.php");
    exit();
}