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
     * Employee constructor.
     *
     * @param $name
     * @param $cpf
     */
    public function __construct($name, $cpf)
    {
        $this->name = $name;
        $this->cpf = $cpf;
    }
}