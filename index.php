<?php
// index.php

require 'app/core/Router.php';

$router = new Router();
$router->handleRequest($_SERVER['REQUEST_URI']);