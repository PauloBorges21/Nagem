<?php
require 'config.php';
require 'autoload.php';
$a =  new Authc($pdo);
$email = filter_input(INPUT_POST,'email');
$result = $a->validateEmail($email);
echo (json_encode($result));
