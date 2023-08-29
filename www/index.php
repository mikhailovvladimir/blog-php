<?php
// фронт контроллер - главный файл проекта.

spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/../src/' . str_replace('\\', '/', $className) . '.php';
});


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