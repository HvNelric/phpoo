<?php
spl_autoload_register(function ($classname) {
    $file = __DIR__ . DIRECTORY_SEPARATOR
        . str_replace('\\', DIRECTORY_SEPARATOR, $classname)
        . '.php'
    ;

    require_once $file;
});