<?php 

namespace Model\Employee;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao() : float
    {
        return 600.0;
    }
}