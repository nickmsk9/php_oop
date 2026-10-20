<?php

declare(strict_types=1);

use App\Student;

require dirname(__DIR__) . '/vendor/autoload.php';

// Один класс — два самостоятельных объекта со своими значениями свойств.
$nick = new Student('Никита');
$anna = new Student('Анна');

echo $nick->introduce() . PHP_EOL;
echo $anna->introduce() . PHP_EOL;

// Задание: добавь в Student свойство age и метод getAge().
// Передавай возраст через конструктор и выведи его для каждого объекта.
