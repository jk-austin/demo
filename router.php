<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/demo/index.php" => "/controllers/index.php",
    "/demo/about.php" => "/controllers/about.php",
    "/demo/notes.php" => "/controllers/notes.php",
    "/demo/contact.php" => "/controllers/contact.php"
];

function routeToController($uri, $routes) {
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

routeToController($uri, $routes);
