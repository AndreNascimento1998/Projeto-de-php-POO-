<?php
namespace Model;
final class CPF
{
    private $numero;

    public function __construct(string $numero)
    {
        $this->numero = $numero;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }
}
