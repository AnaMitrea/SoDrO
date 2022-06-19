<?php
namespace Includes;

use Controller\LoginController;
use Handlers\PGSessions;
use PDO;

const root = '/BackendRouting';

if(isset($_POST["submit"])){

    include "backend/handlers/PGSessions.php";
    include "backend/handlers/DatabaseHandler.php";
    include "backend/controllers/login.classes.php";
    include "backend/controllers/login-controller.classes.php";

    $credentials = [];
    $credentials = include "database.config.php";
    $dsn = "pgsql:host=" . $credentials['host'] . ";port=" . $credentials['port'] . ";dbname=" . $credentials['db'] . ";";
    $pdo_connection = new PDO($dsn, $credentials['user'], $credentials['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    // Getting data from login form
    $email = $_POST["email"];
    $userPwd = $_POST["password"];

    $login = new LoginController($email, $userPwd);
    if(($login->loginUser())){
       // setcookie('email', $email, time()+60*60*7);
       // setcookie('password', $password,time()+60*60*7);

        $sessions_handler = new PGSessions($pdo_connection);

        if(!isset($_SESSION)) {
            session_set_save_handler($sessions_handler, true);
            session_name('MySessionName');
            session_start();
        }
        session_regenerate_id(true);

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $userPwd;

        $sessions_handler->write(1,session_id());

        echo( '<h1>after decode</h1>');
        print_r( $_SESSION);

        session_write_close();
        header("location: " . root . "/login?error=none");
    }else{
        echo "Email or Password is invalid";
    }

}