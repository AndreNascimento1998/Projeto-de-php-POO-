<?php

namespace Model\Employee;

use Model\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao() : float
    {
        return $this->getSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === "1234";
    }
}