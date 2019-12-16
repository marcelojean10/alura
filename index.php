<?php
ini_set("display_erros", 1);

require "autoload.php";

use Entity\Employees\Manager;
use Entity\Employees\Student;
use Entity\Employee as Director;

$director = new Manager("Pimenta", "496.422.340-09");
$student = new Student("Marcelo Jean", "369.008.130-03");

echo "<pre>";
var_dump($director);

$director->updateCpf("841.038.640-28");
echo "<br />";
var_dump($director);

echo "<br />";
var_dump($student);

//echo $director . "<br />";
//echo $student . "<br />";
//echo $manager . "<br />";
