<?php
// public/index.php

require_once '../config/config.php';
require_once '../core/Controller.php';
require_once '../core/Model.php';
require_once '../core/View.php';

// Jednostavni router za rukovanje URL-ovima
$url = isset($_GET['url']) ? $_GET['url'] : '';
$url = rtrim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);

$controllerName = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'HomeController';
$methodName = isset($url[1]) ? $url[1] : 'index';
$params = array_slice($url, 2);

if (file_exists('../app/controllers/' . $controllerName . '.php')) {
    require_once '../app/controllers/' . $controllerName . '.php';
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