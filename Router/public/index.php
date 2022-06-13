<?php

use App\Router;

# require __DIR__ . '/../vendor/autoload.php';
require_once '../src/Router.php';

$router = new Router();

$router->get('/Router/public/', function () {
    echo 'Home page';
});

$router->get('/Router/public/about', function () {
    echo 'About page';
});

$router->addNotFoundHandler(function () {
    $title = 'Not Found!';
    require_once '../templates/404error.php';
});

$router->run();