<?php

namespace Entity\Employees;

use Entity\Employee;

/**
 * Entidade responsável pelo Diretor.
 *
 * @package Entity\Employees
 */
class Manager extends Employee
{
    /**
     * Manager constructor.
     *
     * @param $name
     * @param $cpf
     */
    public function __construct($name, $cpf)
    {
        parent::__construct($name, $cpf);
    }

    /**
     * Altera o CPF.
     *
     * @param $cpf
     */
    public function updateCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public static function hello()
    {
        return "Hi!! I'm Employee.";
    }
}