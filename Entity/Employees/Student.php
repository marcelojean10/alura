<?php

namespace Entity\Employees;

use Entity\Employee;

/**
 * Entidade respons�vel pelo Aluno.
 *
 * @package Entity\Employees
 */
class Student extends Employee
{
    /**
     * Student constructor.
     *
     * @param $name
     * @param $cpf
     */
    public function __construct($name, $cpf, $salary)
    {
        parent::__construct($name, $cpf, $salary);
    }

    /**
     * Conceder bonifica��o de 50% do sal�rio.
     *
     * @return float
     */
    public function setBonus()
    {
        return $this->salary * 0.2;
    }

    public static function hello()
    {
        return "Hi!! I'm Student.";
    }
}