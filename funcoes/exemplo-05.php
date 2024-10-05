<?php

$a = 10;
// Passagem de parametro por referência.
function trocaValor(&$b)
{
    $b += 50;

    return $b;
}

echo trocaValor($a);
echo '<br>';
echo trocaValor($a);
echo '<br>';
echo $a;
echo '<br>';