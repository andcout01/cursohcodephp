<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Andre',
    'idade' => 47
));

print_r($pessoas[0]['nome']);