<?php

namespace Entity;

/**
 * Entidade respons�vel pelo funcion�rio.
 *
 */
class Employee
{
    /** @var string Nome do funcion�rio. */
    private $name;

    /** @var string Cpf do funcion�rio. */
    protected $cpf;

    /**
     * @var float Sal�rio do funcion�rio.
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
     * Conceder bonifica��o de 50% do sal�rio.
     *
     * @return float
     */
    public function setBonus()
    {
        return $this->salary * 0.5;
    }

    /**
     * Conceder 1,5 de aumento de sal�rio.
     *
     * @return float
     */
    public function salaryIncrease()
    {
        return $this->salary *= 1.5;
    }

}