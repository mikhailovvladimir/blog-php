<?php

namespace MyProject\Models\Users; // префикс, котороый разделяет тот или иной класс

class User
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}