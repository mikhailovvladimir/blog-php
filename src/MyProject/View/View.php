<?php

namespace MyProject\View;

class View
{
    private $templatesPath;

    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath; // базовый путь до наших html файлов
    }

    public function renderHtml(string $templateName, array $vars = [])
    {
        extract($vars); // ['age' => 23]
        // $age = 23;

        ob_start(); // буфер сохраняет информацию во временном хранилище
        include $this->templatesPath . '/' . $templateName; // собираем весь html шаблон
        $buffer = ob_get_contents(); // кладем весю html страничку в переменную
        ob_end_clean(); // очищаем буфер

        echo $buffer; // выводим html
    }
}