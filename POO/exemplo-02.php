<?php

// Classe
class Carro
{
    // Atributos
    private $modelo;
    private $motor;
    private $ano;

    // Métodos
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getMotor(): float
    {
        return $this->motor;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function exibir()
    {
        return array(
            'modelo' => $this->getModelo(),
            'motor' => $this->getMotor(),
            'ano' => $this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo('Gol-gt');
$gol->setMotor('1.6');
$gol->setAno('2017');
var_dump($gol->exibir());

// foreach ($gol->exibir() as $key => $value) {
//     echo $key . ' = ' . $value . '<br>';
// }
