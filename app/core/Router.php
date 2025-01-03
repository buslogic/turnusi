<?php
// app/core/Router.php

class Router {
    public function handleRequest($uri) {
        // Ignorišite zahteve za favicon.ico
        if ($uri == '/favicon.ico') {
            return;
        }

        $controllerName = 'HomeController';
        $actionName = 'index';

        // Parsirajte URI da dobijete kontroler i akciju
        $uriParts = explode('/', trim($uri, '/'));
        if (isset($uriParts[0]) && $uriParts[0] !== '') {
            $controllerName = ucfirst($uriParts[0]) . 'Controller';
        }
        if (isset($uriParts[1]) && $uriParts[1] !== '') {
            $actionName = $uriParts[1];
        }

        // Proverite da li fajl kontrolera postoji pre nego što ga uključite
        $controllerFile = 'app/controllers/' . $controllerName . '.php';
        if (file_exists($controllerFile)) {
            require $controllerFile;
            $controller = new $controllerName();
            $controller->$actionName();
        } else {
            echo "Controller file not found: " . $controllerFile;
        }
    }
}