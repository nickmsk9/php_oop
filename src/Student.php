<?php

declare(strict_types=1);

namespace App;

class Student
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function introduce(): string
    {
        return "Привет! Меня зовут {$this->name}, я изучаю ООП на PHP.";
    }
}
