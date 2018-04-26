<?php
spl_autoload_register(function ($classname) {
    $file = __DIR__ . '/../'
        . str_replace('\\', '/', $classname)
        . '.php'
    ;

    require_once $file;
    // Model\Categorie
    // require_once 'site/include/../Model/Categorie.php equivaut à : require_once 'site/Model/Categorie.php';
});