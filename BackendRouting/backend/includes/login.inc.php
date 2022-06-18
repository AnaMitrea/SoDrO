<?php
namespace Includes;

use Classes\LoginController;
use Handlers\PGSessions;
use PDO;

const root = '/BackendRouting';

if(isset($_POST["submit"])){

    include "backend/handler/PGSessions.php";
    include "backend/handler/DatabaseHandler.php";
    include "backend/classes/login.classes.php";
    include "backend/classes/login-controller.classes.php";

    //TODO refactor PDO
    $host = 'ec2-63-34-180-86.eu-west-1.compute.amazonaws.com';
    $db = 'd3gte55iprrt17';
    $user = 'heavdsafillskn';
    $password = '4d93c9ccf6eedb3fc772c3322cec27fd4b22148b007078c4cdf85a8a89807755';
    $dsn = "pgsql:host=$host;port=5432;dbname=$db;";

    $pdo_connection = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

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
       // header("location: ../pages/admin.php");
    }else{
        echo "Email or Password is invalid";
    }

}