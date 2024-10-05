<?php

function ola($texto, $texto1, $texto2)
{
    $argumentos = func_get_args();
    return $argumentos;
}

ola('bom dia', 'boa tarde', 'boa noite');
echo '<br>';
// var_dump(ola());