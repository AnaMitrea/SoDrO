<?php

use App\Router;
use App\Handler\Contact;

require_once 'src/Router.php';

const root = '/BackendRouting';

$router = new Router();

$router->get(root . '/', function () {
    echo 'Index page';
});

$router->get(root . '/login', function () {
    require_once 'frontend/pages/login.html';
});

$router->get(root . '/recover', function () {
    require_once 'frontend/pages/recover-pwd.php';
});

$router->get(root . '/home', function () {
    require_once 'frontend/pages/homepage.php';
});

$router->get(root . '/profile', function () {
    require_once 'frontend/pages/dashboard.php';
});

$router->get(root . '/trending', function () {
    require_once 'frontend/pages/trending.html';
});

$router->get(root. '/products', function () {
    require_once 'frontend/pages/shop-page.html';
});
/* Recipes */
/* TODO de modificat sa fie ca la  /BackendRouting/public/about */
$router->get(root . '/recipes/1', function () {
    require_once 'frontend/pages/recipes/recipe1.html';
});
$router->get(root . '/recipes/2', function () {
    require_once 'frontend/pages/recipes/recipe2.html';
});
$router->get(root . '/recipes/3', function () {
    require_once 'frontend/pages/recipes/recipe3.html';
});
$router->get(root . '/recipes/4', function () {
    require_once 'frontend/pages/recipes/recipe4.html';
});
$router->get(root . '/recipes/5', function () {
    require_once 'frontend/pages/recipes/recipe5.html';
});

$router->get(root. '/favorites', function () {
    require_once '';
});

$router->get('/BackendRouting/trending', function () {
    require_once 'frontend/pages/trending.html';
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
    require_once 'frontend/pages/404error.php';
});

$router->run();