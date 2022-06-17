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
    require_once 'frontend/pages/login.php';
    #header('Location: frontend/pages/login.php');
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
    require_once 'frontend/pages/trending.php';
});

$router->get(root. '/products', function () {
    require_once 'frontend/pages/shop-page.html';
});

/* Recipes */
$router->get(root . '/recipes', function (array $params = []) {
    if (!empty($params['id'])) {
        if($params['id'] >= 1 && $params['id'] <=5)
            require_once 'frontend/pages/recipes/recipe' . $params['id'] . '.php';
        else
            #redirect if id > 5 || id < 1
            require_once 'frontend/pages/recipes/recipe1.php';
    }
    else
        require_once 'frontend/pages/recipes/recipe1.php';
});


$router->get(root . '/favorites', function () {
    require_once '';
});

# Footer Endpoints
$router->get(root . '/terms', function () {
    require_once 'frontend/pages/footer/terms.php';
});

$router->get(root . '/blogs', function () {
    require_once 'frontend/pages/footer/blogs.php';
});

$router->get(root . '/about', function () {
    require_once 'frontend/pages/footer/about.php';
});

$router->get(root . '/contact', function () {
    require_once 'frontend/pages/footer/contact.php';
});

$router->get(root . '/privacy', function () {
    require_once 'frontend/pages/footer/privacy.php';
});



# testing stuff
$router->get('/BackendRouting/public/contact', Contact::class . '::execute');
$router->post('/BackendRouting/public/contact', function ($params) {
    var_dump($params);
});

# in case of page not found - error 404
$router->addNotFoundHandler(function () {
    $title = 'Not Found!';
    require_once 'frontend/pages/404error.php';
});

$router->run();