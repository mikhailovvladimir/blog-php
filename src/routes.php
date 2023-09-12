<?php
// конфиг это просто набор настроек

return [
    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
    '~^article/$~' => [\MyProject\Controllers\MainController::class, 'newPage'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main']
];