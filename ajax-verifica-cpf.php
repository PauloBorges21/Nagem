<?php

require 'config.php';
require 'autoload.php';
$a =  new Authc($pdo);
$id = filter_input(INPUT_POST,'proc');
$cpf = filter_input(INPUT_POST,'cpf');
$result = $a->validateCpf($cpf);
echo (json_encode($result));