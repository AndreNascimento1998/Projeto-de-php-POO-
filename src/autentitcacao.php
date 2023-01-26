<?php

use Model\Account\Titular;
use Model\CPF;
use Model\Employee\Desenvolvedor;
use Model\Employee\Diretor;
use Model\Employee\EditorVideo;
use Model\Employee\Gerente;
use Model\Endereco;
use Service\Autenticador;
use Service\ControlarDeBonificacao;

require 'src/autoload.php';

$autenticador = new Autenticador();

$umGerente = new Gerente('Adsae', new CPF('456.789.123-89'), 10000);
$autenticador->tentaLogin($umGerente, '1234');

$titular = new Titular(new CPF('456.789.123-89'), 'Adsae', new Endereco('dsadas', 'deafa', 'dasa', '25'));
$autenticador->tentaLogin($titular, '1234');