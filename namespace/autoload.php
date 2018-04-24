<?php
spl_autoload_register(function ($classname) {
    // $classname est le nom complet de la classe avec son namespace
    
    // on retrouve le nom du fichier qui contient la classe
    // parce qu'on a organisé les namespaces en fonction
    // du système de fichiers
    $file = __DIR__ . DIRECTORY_SEPARATOR
        . str_replace('\\', DIRECTORY_SEPARATOR, $classname)
        . '.php'
    ;
    
    // si le fichier n'existe pas on va le chercher dans external/lib/
    if (!file_exists($file)) {
        $file = __DIR__ . DIRECTORY_SEPARATOR
            . 'external' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR
            . str_replace('\\', DIRECTORY_SEPARATOR, $classname)
            . '.php'
        ;
    }
    
    require_once $file;
});