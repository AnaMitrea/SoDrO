<?php

/* Accessing page only when form button is pressed
    "submit" = name of the button in signup page
    $_POST["..."] -> gets information from the form
*/
if(isset($_POST["signup"])) {
    // grabbing the data
    $uid= $_POST["uid"];
    $email= $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $dob = $_POST["dob"];

    // instantiate Signup controller class
    include "../classes/database-handler.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-controller.classes.php";

    $signup = new SignupController($uid, $email, $pwd, $pwdRepeat, $dob);

    // running error handlers and user signup
    $signup->signupUser();

    // going back to front page
    header("location: ../pages/admin.php?error=none");
}