<?php

require 'config.php';
require 'autoload.php';

$a =  new Authc($pdo);

$cnpj = filter_input(INPUT_POST,'cnpj');


$result = $a->validateCnpj($cnpj);
echo (json_encode($result));


//if($result) {
//    $response = array(
//        'success' => false,
//        'message' => 'CNPJ já Registrado',
//        'redirect_url' => $base
//    );
//    echo json_encode($response);
//} else {
//    $response = array(
//        'success' => true,
//        'message' => 'Não existe CNPJ na base de dados',
//    );
//    echo json_encode($response);
//}