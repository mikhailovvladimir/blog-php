<?php
// конфиг это просто набор настроек

return [
    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
    '~^page/$~' => [\MyProject\Controllers\MainController::class, 'newPage'],
    '~^article/$~' => [\MyProject\Controllers\MainController::class, 'newPage'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main']
];