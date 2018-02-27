<?php

/**
 * include the dev.php. function debug() from debug the code;
 */
require 'application/lib/dev.php';
/**
 * autoload class
 */
spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

/**
 * start session
 */
session_start();

/**
 * start
 */
$router = new \application\core\Router();
$router->run();

//$database = new \application\lib\Database();
