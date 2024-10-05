<?php

//Parametros de funções.
function ola($texto = 'Mundo', $periodo) // Valor padrão
{
    return "Olá $texto! $periodo!<br>";

}

echo ola('Mundo', 'Bom dia');
echo ola('', 'Boa noite');
echo ola('Andre', 'Boa tarde');
echo ola('Bruna', '');
echo ola('Sirlei', 'Boa noite');