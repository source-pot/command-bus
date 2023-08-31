<?php

/**
 * A very basic autoloader implementation that infers a class name from the filename, e.g:
 * Application\Command\ExampleCommand -> ./Application/Copmmand/ExampleCommand.php
 * If the file doesn't exist, take no further action.  Let PHP fail for itself elsewhere
 */
spl_autoload_register(function($class) {
    $file = dirname(__DIR__) . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if(file_exists($file)) include $file;
});