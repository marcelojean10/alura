<?php

namespace Entity\Employees;

use Entity\Employee;

/**
 * Entidade responsável pelo Aluno.
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
     * Conceder bonificação de 50% do salário.
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