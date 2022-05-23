<?php

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    include "../classes/database-handler.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-controller.classes.php";

    $login = new LoginControler($email,$password);

    $login->loginUser();

    header("location: ../pages/admin.php");
}