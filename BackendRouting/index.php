<?php
if(!isset($_SESSION)) {
    session_start();
}

use App\Router;
use App\Model\Contact;
use App\Controller\ShopController;
use App\Controller\UserController;
require 'application/Router.php';
require 'application/class/controllers/ShopController.php';
require 'application/class/controllers/UserController.php';

const root = '/BackendRouting';

$router = new Router();

$router->get(root . '/', function () {
    echo 'Index page';
});

# Sign up
$router->get(root . '/signup', function (array $params = []) {
    if(empty($params["error"]))
        require 'frontend/pages/login.php';
    else {
        switch ($params["error"]) {
            case "none":
                require 'frontend/pages/login.php';
                break;
            case "emptyinput":
                echo "Empty Input";
                require 'frontend/pages/404error.php';
                break;
            case "invalidusername":
                echo "Invalid Username";
                require 'frontend/pages/404error.php';
                break;
            case "invalidemail":
                echo "Invalid Email";
                require 'frontend/pages/404error.php';
                break;
            case "passwordunmatch":
                echo "Passwords don't match";
                require 'frontend/pages/404error.php';
                break;
            case "uidtaken":
                echo "Username or email already taken";
                require 'frontend/pages/404error.php';
                break;
            case "stmtfailed":
                echo "Database Statement failed";
                require 'frontend/pages/404error.php';
                break;
            default:
                echo "Something unexpectedly happened";
                require 'frontend/pages/404error.php';
        }
    }
});
$router->post(root . '/signup', function () {
    require 'application/class/views/signup.phtml';
});

# Login
$router->get(root . '/login', function (array $params = []) {
    if(empty($params["error"]))
        require 'frontend/pages/login.php';
    else {
        switch ($params["error"]) {
            case "emptyinput":
            case "failed":
            case "none":
                require 'frontend/pages/login.php';
                break;
            default:
                require 'frontend/pages/404error.php';
        }
    }
});
$router->post(root . '/login', function () {
    if(!empty($_SESSION['email']) && !empty($_SESSION['username'])) {
        $userController = new UserController([$_SESSION['email'], $_SESSION['username']]);
        $maxUserId = $userController->getMaxUserId();
        $isAdmin = $userController->getAdminFlag();
        require 'application/class/views/login.phtml';
    }
    else {
        require 'application/class/views/login.phtml';
    }
});

# Password recovery
$router->get(root . '/recover', function () {
    require 'frontend/pages/recover-pwd.php';
});

# Homepage
$router->get(root . '/home', function () {
    require 'frontend/pages/homepage.php';
});

# User/Admin Profile
/* TODO: Check user for admin=true in session/cookie */
$router->get(root . '/profile', function (array $params = []) {
    $userController = new UserController([$_SESSION['email'], $_SESSION['username']]);
    $isAdmin = $userController->getAdminFlag();

    if($isAdmin) {
        require 'frontend/pages/admin.php';
        switch ($params["error"]) {
            case "none":
                require 'frontend/pages/admin.php';
                break;
            case "emptyinput":
                echo "Empty Input";
                // require 'frontend/pages/404error.php';
                break;
            case "username":
                echo "Invalid Username";
                // require 'frontend/pages/404error.php';
                break;
            case "emptyemail":
                echo "Empty Email";
                // require 'frontend/pages/404error.php';
                break;
            case "useremailtaken":
                echo "Username or email taken!";
                // require 'frontend/pages/404error.php';
                break;
            default:
                echo "Something unexpectedly happened";
            //  require 'frontend/pages/404error.php';
        }
    } else {
        require 'frontend/pages/dashboard.php';
    }
});

$router->post(root . '/profile', function (array $params = []) {
    if($params['method']== 'add'){
        require 'application/class/views/admin.adduser.phtml';
    }
    else{
        if($params['method']=='remove'){
            require 'application/class/views/admin.removeUser.phtml';
        }
        else {
            header("location: " . root . "/error404");
        }
    }
});

# Trending
$router->get(root . '/trending', function () {
    require 'frontend/pages/trending.php';
});

# Multiple Products Page
$router->get(root. '/products', function ($params = []) {
    $page = '1';
    $sort_by = null;

    if (!empty($params['page'])) {
        $page = $params['page'];
    }
    if (!empty($params['sort'])) {
        $sort_by = $params['sort'];
    }

    $shopController = new ShopController([$page,$sort_by]);
});
$router->post(root . '/products', function ($params = []) {
    var_dump($params);
    // TODO post

    #require 'frontend/pages/shop-page-after-sort.php';
});


// TODO
$router->get(root. '/product', function (array $params = []) {
    if(!empty($params['code'])) {
        require 'frontend/pages/product-page.php';
    }
    else
        require 'frontend/pages/product-page.php';
});


/* Recipes */
$router->get(root . '/recipes', function (array $params = []){
    if (!empty($params['id'])) {
        if($params['id'] >= 1 && $params['id'] <= 5)
            require 'frontend/pages/recipes/recipe' . $params['id'] . '.php';
        else {
            require 'frontend/pages/404error.php';
        }
    }
    else
        require 'frontend/pages/recipes/recipe1.php';
});


$router->get(root . '/favorites', function () {
    require 'frontend/pages/favorites.php';
});

# Footer Endpoints
$router->get(root . '/terms', function () {
    require 'frontend/pages/footer/terms.php';
});

$router->get(root . '/blogs', function () {
    require 'frontend/pages/footer/blogs.php';
});

$router->get(root . '/about', function () {
    require 'frontend/pages/footer/about.php';
});

$router->get(root . '/contact', function () {
    require 'frontend/pages/footer/contact.php';
});

$router->get(root . '/privacy', function () {
    require 'frontend/pages/footer/privacy.php';
});

$router->get(root . '/error404', function () {
    require 'frontend/pages/404error.php';
});


# testing stuff
$router->get('/BackendRouting/contact', Contact::class . '::execute');
$router->post('/BackendRouting/contact', function ($params) {
    var_dump($params);
});

# in case of page not found - error 404
$router->addNotFoundHandler(function () {
    header("location: " . root . "/error404");
});

$router->run();