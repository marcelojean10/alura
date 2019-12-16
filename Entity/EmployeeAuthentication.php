<?php

namespace Entity;

use Entity\Employee;

/**
 * Entidade responsável pela autênticação de funcionários.
 *
 * @package Entity
 */
class EmployeeAuthentication extends Employee
{

    /**
     * @var string Senha de validação.
     */
    public $password;

    /**
     * Valida a senha.
     * Verifica se a senha digitada é a mesma da classe.
     *
     * @param $password
     * @return bool
     */
    public function validatePassword($password)
    {
        return ($this->password == $password) ? true : false;
    }
}