<?php
require 'autoload.php';
require 'config.php';
require 'partials/header.php';
$id = $_GET['proc'];
$id =  intval($id);
$l = new Listagem($pdo);
$cnpj = $l->getCliente($id);
require 'partials/formularioContato.php';
require 'partials/footer.php';

