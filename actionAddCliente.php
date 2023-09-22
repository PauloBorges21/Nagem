<?php
require 'config.php';
require 'autoload.php';

$a =  new Authc($pdo);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $form = array();
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'cliente') === 0) {
                // Remove "contato-" do início do índice
                $column = str_replace('cliente-', '', $key);
                if ($column === 'cep' && filter_var($value, FILTER_SANITIZE_NUMBER_INT)) {
                    $form[$column] = preg_replace('/[^0-9]/', '', $value);
                } else {
                    $form[$column] = filter_var($value, FILTER_SANITIZE_STRING);
                }
            }
        }
    }
    $existCnpj = $a->cnpjExists($form['cnpj']);
    if($existCnpj){

        header("Location: " . $base . "/");
        exit();
    }
    $insertC = $a->registerByCnpj($form);
    header("Location: " . $base . "/");
    exit();
}