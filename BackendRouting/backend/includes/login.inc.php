<?php
namespace Includes;

use Classes\LoginController;

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    include "../classes/PGSessions.php";
    include "../handler/DatabaseHandler.php";
    include "../classes/login.classes.php";
    include "../classes/login-controller.classes.php";

    $host = 'ec2-63-34-180-86.eu-west-1.compute.amazonaws.com';
    $db = 'd3gte55iprrt17';
    $user = 'heavdsafillskn';
    $password = '4d93c9ccf6eedb3fc772c3322cec27fd4b22148b007078c4cdf85a8a89807755';
    $dsn = "pgsql:host=$host;port=5432;dbname=$db;";

    $pdo_connection =new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $login = new LoginController($email,$password);
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

        $_SESSION['email'] =$email;
        $_SESSION['password'] =$password;

        $sessions_handler->write(1,session_id());
        $res=$sessions_handler->read(1);


        echo( '<h1>after decode</h1>');
        print_r( $_SESSION);

        session_write_close();
       // header("location: ../pages/admin.php");
    }else{
        echo "Email or Password is invalid";
    }

}