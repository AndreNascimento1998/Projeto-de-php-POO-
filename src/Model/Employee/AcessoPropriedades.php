<?php 

namespace Model\Employee;

    trait AcessoPropriedades
    {
        public function __get($name)
        {
            $metodo = 'get' . ucfirst($name);
            return $this->$metodo();
        }   
    }