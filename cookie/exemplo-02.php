<?php

if (isset($_COOKIE['NOME_DO_COOKIE'])) {
    $res = json_decode($_COOKIE['NOME_DO_COOKIE']); 
    echo $res->empresa;

}