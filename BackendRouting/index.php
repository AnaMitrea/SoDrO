<?php

use App\Router;
use App\Handler\Contact;

require_once 'src/Router.php';

$router = new Router();

$router->get('/BackendRouting/', function () {
    echo 'Index page';
});

$router->get('/BackendRouting/login', function () {
    require_once 'frontend/pages/login.html';
});

$router->get('/BackendRouting/recover', function () {
    require_once 'frontend/pages/change-psswd.html';
});

$router->get('/BackendRouting/public/about', function (array $params = []) {
    echo 'About page';
    if (!empty($params['firstname']) && !empty($params['secondname'])) {
        echo '<h1>Hello ' . $params['firstname'] . ' ' . $params['secondname'] .'</h1>';
    }
    else
        echo '<h1>Hello Stranger</h1>';
});

$router->get('/BackendRouting/public/contact', Contact::class . '::execute');
$router->post('/BackendRouting/public/contact', function ($params) {
    var_dump($params);
});

$router->addNotFoundHandler(function () {
    $title = 'Not Found!';
    require_once 'frontend/pages/404error.phtml';
});

$router->run();