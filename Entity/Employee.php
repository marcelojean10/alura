<?php

namespace Entity;

/**
 * Entidade responsável pelo funcionário.
 *
 */
class Employee
{
    /** @var string Nome do funcionário. */
    private $name;

    /** @var string Cpf do funcionário. */
    protected $cpf;

    /**
     * @var float Salário do funcionário.
     */
    protected $salary;

    /**
     * Employee constructor.
     *
     * @param $name
     * @param $cpf
     */
    public function __construct($name, $cpf, $salary)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->salary = $salary;
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

    /**
     * Conceder bonificação de 50% do salário.
     *
     * @return float
     */
    public function setBonus()
    {
        return $this->salary * 0.5;
    }

    /**
     * Conceder 1,5 de aumento de salário.
     *
     * @return float
     */
    public function salaryIncrease()
    {
        return $this->salary *= 1.5;
    }

}