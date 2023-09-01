<?php
// фронт контроллер - главный файл проекта.

// когда класс или объект не найден, отрабатывает эта функция и в $className передается namespace
spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/../src/' . str_replace('\\', '/', $className) . '.php';
});

//http://blog.kz   || /article/english ||
$route = $_GET['route'] ?? ''; // получаем марсшруты или пустую строку

$routes = require __DIR__ . '/../src/routes.php'; // мы получаем наши подготовленные марсшруты

$isRouteFound = false; // роут не найден
foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
    if (!empty($matches)) {
        $isRouteFound = true; // роут найден
        break; // выход из цикла
    }
}

if (!$isRouteFound) { // если isRouteFound == false
    echo 'Страница не найдена!';
    return;
}

unset($matches[0]); // удаляет 0 элемент с полным совпадением

$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];

$controller = new $controllerName(); // создаем объект контроллера

$controller->$actionName(...$matches); // вызываем экшен внутри контроллера

// адрес http://blog.kz/article/english
// index.php
// проверка марсшрута на совпадение с нашими роутами
// создаем контролер
// у контроллера вызываем экшен и передаем аргументы в этот экшен если они у нас есть