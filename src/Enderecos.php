<?php

use Model\Endereco;

require_once 'src/autoload.php';

$endereco = new Endereco('Aeres', 'Gera', 'Eredsa', '25');
$endereco2 = new Endereco('Efesdes', 'JFfera', 'YRredsa', '2450');

echo $endereco->bairro;
//echo $endereco;