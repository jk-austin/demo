<?php

$routes = require(__DIR__ . "/routes.php");

function routeToController($uri, $routes, $db) {
    if (array_key_exists($uri, $routes)) {
        require __DIR__ . $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);
    require __DIR__ . "/views/{$code}.php";
    die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes, $db);
