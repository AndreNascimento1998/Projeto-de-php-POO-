<?php

use Model\CPF;
use Model\Employee\Desenvolvedor;
use Model\Employee\EditorVideo;
use Model\Employee\Gerente;
use Service\ControlarDeBonificacao;

require_once 'src/autoload.php';

$desenvolvedor = new Desenvolvedor('André', new CPF('123.456.789-90'), 1555.80);
$gerente = new Gerente('Adeasdsa', new CPF('145.489.123-70'), 2000.15);
$editor = new EditorVideo('Erksals', new CPF('489.456.789-12'), 1500.55);

$controlador = new ControlarDeBonificacao();
$controlador->adicionaBonificacao($desenvolvedor);
$controlador->adicionaBonificacao($gerente);
$controlador->adicionaBonificacao($editor);
echo $controlador->getTotal();