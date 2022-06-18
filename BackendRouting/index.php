<?php

use App\Router;
use App\Handler\Contact;
require_once 'backend/Router.php';

const root = '/BackendRouting';

$router = new Router();

$router->get(root . '/', function () {
    echo 'Index page';
});

$router->get(root . '/signup', function () {
    require_once 'frontend/pages/login.php';
});
$router->post(root . '/signup', function ($params) {
    require_once 'backend/includes/signup.inc.php';

    if(empty($params["error"]))
        require_once 'frontend/pages/login.php';
    else {
        // TODO maybe alert message?
        switch ($params["error"]) {
            case "none":
                require_once 'frontend/pages/login.php';
                break;
            case "emptyinput":
                echo "Empty Input";
                require_once 'frontend/pages/404error.php';
                break;
            case "invalidusername":
                echo "Invalid Username";
                require_once 'frontend/pages/404error.php';
                break;
            case "invalidemail":
                echo "Invalid Email";
                require_once 'frontend/pages/404error.php';
                break;
            case "passwordunmatch":
                echo "Passwords don't match";
                require_once 'frontend/pages/404error.php';
                break;
            case "uidtaken":
                echo "Username or email already taken";
                require_once 'frontend/pages/404error.php';
                break;
            case "stmtfailed":
                echo "Database Statement failed";
                require_once 'frontend/pages/404error.php';
                break;
            default:
                echo "Something unexpectedly happened";
                require_once 'frontend/pages/404error.php';
        }

    }
});

$router->get(root . '/login', function (array $params = []) {
    if(empty($params["error"]))
        require_once 'frontend/pages/login.php';
    else {
        switch ($params["error"]) {
            case "none":
                require_once 'frontend/pages/login.php';
                break;
            case "emptyinput":
                echo "Empty Input";
                require_once 'frontend/pages/eroare.php';
                break;
            case "invalidusername":
                echo "Invalid Username";
                require_once 'frontend/pages/eroare.php';
                break;
            case "invalidemail":
                echo "Invalid Email";
                require_once 'frontend/pages/eroare.php';
                break;
            case "passwordunmatch":
                echo "Passwords don't match";
                require_once 'frontend/pages/eroare.php';
                break;
            case "uidtaken":
                echo "Username or email already taken";
                require_once 'frontend/pages/eroare.php';
                break;
            case "stmtfailed":
                echo "Database Statement failed";
                require_once 'frontend/pages/eroare.php';
                break;
            default:
                echo "Something unexpectedly happened";
                require_once 'frontend/pages/eroare.php';
        }
    }
});


$router->get(root . '/recover', function () {
    require_once 'frontend/pages/recover-pwd.php';
});

$router->get(root . '/home', function () {
    require_once 'frontend/pages/homepage.php';
});

/* Profile */
/* TODO: Check user for admin=true in session/cookie */
$router->get(root . '/profile', function (array $params = []) {
    if(empty($params['admin']) || $params['admin'] == 'false') {
        require_once 'frontend/pages/dashboard.php';
    }else {
        # Endpoint: /profile?admin=true
        if($params['admin'] == 'true') {
            require_once 'frontend/pages/admin.php';
        } else {
            require_once 'frontend/pages/404error.php';
        }
    }
});


$router->get(root . '/trending', function () {
    require_once 'frontend/pages/trending.php';
});

$router->get(root. '/products', function () {
    require_once 'frontend/pages/shop-page.php';
});

/* Recipes */
$router->get(root . '/recipes', function (array $params = []){
    if (!empty($params['id'])) {
        if($params['id'] >= 1 && $params['id'] <= 5)
            require_once 'frontend/pages/recipes/recipe' . $params['id'] . '.php';
        else {
            require_once 'frontend/pages/404error.php';
        }
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
$router->get('/BackendRouting/contact', Contact::class . '::execute');
$router->post('/BackendRouting/contact', function ($params) {
    var_dump($params);
});

# in case of page not found - error 404
$router->addNotFoundHandler(function () {
    $title = 'Not Found!';
    require_once 'frontend/pages/404error.php';
});

$router->run();