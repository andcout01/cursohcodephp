<?php

$pessoa = array(
    'nome' => 'Andre',
    'idade' => 47
);

foreach ($pessoa as &$value) {
    if (gettype($value) === 'integer') {
        $value += 10;
    }
    echo $value . '<br>';
}

print_r($pessoa);