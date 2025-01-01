<?php
// public/index.php

require_once '../config/config.php';
require_once '../core/Controller.php';
require_once '../core/Model.php';
require_once '../core/View.php';

// Dodaj jednostavni autoloader
spl_autoload_register(function ($class_name) {
    $paths = [
        '../app/controllers/',
        '../app/models/',
        '../core/'
    ];

    foreach ($paths as $path) {
        $file = $path . $class_name . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// Jednostavni router za rukovanje URL-ovima
$url = isset($_GET['url']) ? $_GET['url'] : '';
$url = rtrim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);

$controllerName = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'ScheduleController';
$methodName = isset($url[1]) ? $url[1] : 'index';
$params = array_slice($url, 2);

if (class_exists($controllerName)) {
    $controller = new $controllerName();

    if (method_exists($controller, $methodName)) {
        call_user_func_array([$controller, $methodName], $params);
    } else {
        echo 'Method ' . $methodName . ' not found!';
    }
} else {
    echo 'Controller ' . $controllerName . ' not found!';
}
?>