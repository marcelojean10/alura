<?php
ini_set("display_erros", 1);

require "autoload.php";

use Entity\Employees\Manager;
use Entity\Employees\Student;
use Entity\Employee as Director;

$director = new Manager("Pimenta", "496.422.340-09", 4.500);
$director->password = "123456";


echo "Validacao de senha: <br />";
var_dump($director->validatePassword("123456"));

$student = new Student("Marcelo Jean", "369.008.130-03", 850.70);

echo "<pre>";
var_dump($director);

$director->updateCpf("841.038.640-28");
$director->salaryIncrease();
echo "<br />";
var_dump($director);

echo "<br />";
$student->salaryIncrease();
var_dump($student);

echo "<br />";
echo $student->setBonus();

//echo $director . "<br />";
//echo $student . "<br />";
//echo $manager . "<br />";
