<?php

namespace Model;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}