<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;

class MainController
{
    public function main()
    {
        echo 'Главная страница';
    }

    public function sayHello(string $name)
    {
        echo 'Привет, ' . $name;
    }

    public function newPage()
    {
        echo 'new Page';
    }
}