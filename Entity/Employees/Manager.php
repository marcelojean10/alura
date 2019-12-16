<?php

namespace Entity\Employees;

use Entity\EmployeeAuthentication;

/**
 * Entidade responsável pelo Diretor.
 *
 * @package Entity\Employees
 */
class Manager extends EmployeeAuthentication
{
    /**
     * Manager constructor.
     *
     * @param $name
     * @param $cpf
     */
    public function __construct($name, $cpf, $salary)
    {
        parent::__construct($name, $cpf, $salary);
    }

    public function salaryIncrease()
    {
        return $this->salary *= 1.7;
    }

    public static function hello()
    {
        return "Hi!! I'm Employee.";
    }
}