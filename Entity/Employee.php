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