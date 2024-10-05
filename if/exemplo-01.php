<?php

$qualASuaIdade = 30;
$idadeCrianca = 12;
$idadeMaior = 10;
$idadeMelhor = 69;

if ($qualASuaIdade < $idadeCrianca) {
    echo 'Criança';
} else if ($qualASuaIdade < $idadeMaior){
    echo 'Adolescente';
} else if ($qualASuaIdade < $idadeMelhor) {
    echo 'Adulto';
} else {
    echo 'Idoso';
}

echo '<br>';

//Operador ternário
echo ($qualASuaIdade < $idadeMaior) ? 'Menor de idade' : 'Maior de idade';


?>