<?php

require_once 'config.php';

use Cliente\Cadastro;


$cad = new Cadastro();
$cad->setNome('Andre Coutinho Silva');
$cad->setEmail('andcout@outlook.com');
$cad->setSenha('123456789');

// $cad->registrarVenda();

echo $cad->getNome();
echo get_class($cad);