<?php
// Register the autoloader
spl_autoload_register(function ($class) {
    if (file_exists( __DIR__ .'/models/' . $class . '.php')) {
        require_once __DIR__ .'/models/' . $class . '.php';
    }
});