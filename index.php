<?php

require __DIR__ . "./vendor/autoload.php";

use \App\WebServices\ViaCep;

if (!isset($argv[1])) {
    die("CEP não definido!\n");
}

$dadosCEP = ViaCep::consultarCEP($argv[1]);

print_r($dadosCEP);
