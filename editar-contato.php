<?php
require 'autoload.php';
require 'config.php';
require 'partials/header.php';
$id = $_GET['proc'];
$id =  intval($id);
$l = new Listagem($pdo);
$dados = $l->getAllClientesContato($id);
require 'partials/formularioClienteEdit.php';
require 'partials/footer.php';
