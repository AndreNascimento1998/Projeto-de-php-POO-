<?php

use Model\Account\Titular;
use Model\CPF;
use Model\Endereco;
use Model\Account\ContaCorrente;
use Model\Account\ContaPoupanca;

require_once 'autoload.php';

$conta = new ContaPoupanca (new Titular(new CPF('123.456.78-09'), 'Andrédsadsa', new Endereco('Goiania', 'teste', 'rua steret', '38')),2);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->getSaldo();