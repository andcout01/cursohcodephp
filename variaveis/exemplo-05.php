<?php

// escopo de variaveis...
// $nome = "Andre";

// function teste()
// {
//     global $nome;
//     echo $nome;
// }

// function teste2()
// {
//     $nome = 'João';
//     echo $nome . 'Agora no teste 2';
// }

// teste();
// teste2();

function setMessage() {
    $message = 'Ola Mundo';
    return $message;
}

echo setMessage();