<?php
// конфиг это просто набор настроек

return [
    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
];