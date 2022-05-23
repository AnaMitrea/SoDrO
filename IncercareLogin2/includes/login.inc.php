<?php

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    include "../DatabaseHandler.php";
    include "../classes/login.classes.php";
    include "../classes/login-controler.classes.php";

    $login = new LoginControler($email,$password);

    $login->loginUser();

    header("location:../admin.php");
}