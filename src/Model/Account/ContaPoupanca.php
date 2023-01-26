<?php

namespace Model\Account;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}