<?php

use App\Router;
use App\Handler\Contact;

# require __DIR__ . '/../vendor/autoload.php';
require_once '../src/Router.php';

$router = new Router();

$router->get('/Router/public/', function () {
    echo 'Home page';
});

# example path: http://localhost/Router/public/contact?firstname=maxi&secondname=max  -> hello maxi max
# http://localhost/Router/public/about?firstname=&secondname=ana    -> hello stranger
$router->get('/Router/public/about', function (array $params = []) {
    echo 'About page';
    if (!empty($params['firstname']) && !empty($params['secondname'])) {
        echo '<h1>Hello ' . $params['firstname'] . ' ' . $params['secondname'] .'</h1>';
    }
    else
        echo '<h1>Hello Stranger</h1>';
});

$router->get('/Router/public/contact', Contact::class . '::execute');
$router->post('/Router/public/contact', function ($params) {
    var_dump($params);
});

$router->addNotFoundHandler(function () {
    $title = 'Not Found!';
    require_once '../templates/404error.php';
});

$router->run();