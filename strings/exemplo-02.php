<?php

$nome = "joão rangel";
$nome =  strtoupper($nome); // strtoupper() função que converte para letras maiusculas
echo $nome;

$nome = strtolower($nome); // strtolower() função que converte para letras minusculas
echo '<br>';
echo $nome;

$nome = ucfirst($nome); // strtolower() função que converte a primeira letra para minuscula
echo '<br>';
echo $nome;

$nome = ucwords($nome); // strtolower() função que converte aprimeira letra de cada palacra para letras maiuscula
echo '<br>';
echo $nome;
