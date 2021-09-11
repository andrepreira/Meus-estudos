<?php

namespace Alura\Calisthenics\Domain\Student;

class FullName
{
    private string $firstName;
    private string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        
    }

    public function __toString(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }
}