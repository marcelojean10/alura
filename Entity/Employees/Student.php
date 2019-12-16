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
    public function __construct($name, $cpf)
    {
        parent::__construct($name, $cpf);
    }


    public static function hello()
    {
        return "Hi!! I'm Student.";
    }
}