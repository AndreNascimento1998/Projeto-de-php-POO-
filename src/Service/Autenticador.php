<?php
namespace Service;

use Model\Autenticavel;
use Model\Employee\Diretor;

require_once 'src/autoload.php';

class Autenticador 
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->podeAutenticar($senha)){
            echo "Ok pode logar no sistema.";
        }else {
            echo "senha incorreta";
        }
    }
}