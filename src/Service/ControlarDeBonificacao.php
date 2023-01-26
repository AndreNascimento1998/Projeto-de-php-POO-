<?php
namespace Service;

use Model\Employee\Funcionario;

class ControlarDeBonificacao
{
    private float $totalBonificacao = 0;
    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }

    public function getTotal() : float
    {
        return $this->totalBonificacao;
    }
}