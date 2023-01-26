<?php
namespace Model\Employee;

use Model\Pessoa;
use Model\CPF;
require_once 'src/autoload.php';

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {   
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function setNome(string $nome) : void 
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getSalario() : float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if($valorAumento < 0){
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao() : float;
}