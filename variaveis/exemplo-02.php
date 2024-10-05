<?php

// omes validos de variaveis...
// $anoNascimento = 1990;
// $nomeCompleto = "";
$nome1 = "João";
$sobrenome = 'Silva';
// concatenação
$nomeCompleto = $nome1 . ' ' . $sobrenome;
echo $nomeCompleto;
exit;
echo '<br>';
echo $nome1;
// destroi a variavel
unset($nome1);
// verifica se a variavel $nome1 foi inicializada
if (isset($nome1)) {
    echo $nome1;
    
}
// Tipos de dados.
