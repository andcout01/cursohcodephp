<?php

class Pessoa
{
    public $nome; // Atributo

    public function falar()
    { // Método
        return 'Meu nome é ' . $this->nome;
    }
}

$pessoa = new Pessoa();
$pessoa->nome = 'Andre Coutinho Silva';
echo $pessoa->falar();
