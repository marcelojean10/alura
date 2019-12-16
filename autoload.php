<?php

/**
 * Método responsável carregar as classes ou entidades.
 * Formata o namespace.
 * Caminho absoluto de ontem o arquivo da classe está, para ser inicializado.
 *
 * @param $namespace
 * @return mixed
 */
function load($namespace)
{
    $namespace = str_replace("\\", "/", $namespace);
    $pathAbsolute = __DIR__ . "/" . $namespace . ".php";

    return include_once $pathAbsolute;
}

spl_autoload_register(__NAMESPACE__ . "\load");