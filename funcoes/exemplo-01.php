<?php

//subrotina
function ola()
{
    echo 'Ola mundo<br>';
}

ola();
ola();

//função
function ola1()
{
    return 'Ola mundo<br>';
}

echo ola1();
$frase = ola1();
echo strlen($frase);
