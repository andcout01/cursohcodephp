<?php

// $empresa = 'Hcode';
// $empresa = str_replace('o', '0', $empresa); // substitui a string
// $empresa = str_replace('e', '3', $empresa); // substitui a string

// echo $empresa;

$name = 'Hcode Treinamentos';
$replace = 'Cursos';

$new_name = substr($name, 0, strpos($name, 'T')) . $replace;
echo $new_name;