<?php
// конфиг это просто набор настроек

return [
    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
    '~^translate/$~' => [\MyProject\Controllers\TranslatorController::class, 'translate'],
    '~^article/$~' => [\MyProject\Controllers\MainController::class, 'newPage'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main']
];