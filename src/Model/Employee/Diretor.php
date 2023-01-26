<?php

namespace Model\Employee;

use Model\Autenticavel;
require_once 'src/autoload.php';

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao() : float
    {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === "4321";
    }
}