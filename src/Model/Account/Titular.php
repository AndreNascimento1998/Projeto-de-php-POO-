<?php

namespace Model\Account;

use Model\Autenticavel;
use Model\Pessoa;
use Model\CPF;
use Model\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco() : Endereco 
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === "abcd";
    }
}
