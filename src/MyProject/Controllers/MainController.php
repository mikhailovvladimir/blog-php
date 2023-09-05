<?php

namespace MyProject\Controllers;

use MyProject\View\View;

class MainController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main()
    {
        $articles = [
            ['name' => 'Статья 1', 'text' => 'Текст статьи 1'],
            ['name' => 'Статья 2', 'text' => 'Текст статьи 2'],
        ]; // данные, как будто бы мы получили из базы данных

        // метод внутри объекта View, который загружает нужный html шаблон, и вставляет в него переменные
        $this->view->renderHtml('main/main.php', ['list' => $articles]);
    }

    public function sayHello(string $name)
    {
        $this->view->renderHtml('main/hello.php', ['name' => $name]);
    }

    public function newPage()
    {
        echo 'new Page';
    }
}