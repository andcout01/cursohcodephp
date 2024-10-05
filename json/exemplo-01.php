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

echo json_encode($pessoas);