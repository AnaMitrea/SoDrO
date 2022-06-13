<?php

/* Accessing page only when form button is pressed
    "change_email_submit" = name of the button in signup page
    $_POST["..."] -> gets information from the form
*/
if(isset($_POST["change_email_submit"])) {
    // grabbing the data
    $oldEmail= $_POST["old_email"];
    $newEmail= $_POST["new_email"];
    $newEmailRepeat = $_POST["confirm_email"];

    // instantiate Signup controller class
    include "../classes/database-handler.classes.php";
    include "../classes/change-email.classes.php";
    include "../classes/change-email.controller.php";

    $emailChanger = new ChangeEmailController($oldEmail, $newEmail, $newEmailRepeat);

    // running error handlers and user signup
    $emailChanger->changeEmail();

    // going back to front page
    header("location: ../pages/dashboard.php");
}