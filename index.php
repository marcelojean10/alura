<?php
ini_set("display_erros", 1);

require "autoload.php";

use Entity\Employees\Manager;
use Entity\Employees\Student;
use Entity\Manager as Director;

$director = (new Manager)::hello();
$student = (new Student)::hello();
$manager = (new Director)::hello();


//var_dump($director);
//echo "<br />";
//var_dump($manager);

echo $director . "<br />";
echo $student . "<br />";
echo $manager . "<br />";
