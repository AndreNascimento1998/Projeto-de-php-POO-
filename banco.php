<?php

require 'src/autoload.php';

use Model\Account\Titular;
use Model\Funcionario;
use Model\CPF;
use Model\Endereco;
use Model\Account\Conta;

$umFuncionario = new Funcionario('Adresdadas', new CPF('123.456.789-10'), 'Desen');
$umFuncionario->setNome('André cinza');
echo $umFuncionario->getNome();

$endereco = new Endereco('Goiania', 'um bairro', 'minha rua', '13');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Andre Edasde', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$endereco2 = new Endereco('Edae', 'khghf', 'Iyrfd', '54');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco2));
unset($segundaConta);
echo Conta::getNumeroDeContas(); 