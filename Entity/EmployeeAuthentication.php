<?php

namespace Entity;

use Entity\Employee;

/**
 * Entidade respons�vel pela aut�ntica��o de funcion�rios.
 *
 * @package Entity
 */
class EmployeeAuthentication extends Employee
{

    /**
     * @var string Senha de valida��o.
     */
    public $password;

    /**
     * Valida a senha.
     * Verifica se a senha digitada � a mesma da classe.
     *
     * @param $password
     * @return bool
     */
    public function validatePassword($password)
    {
        return ($this->password == $password) ? true : false;
    }
}