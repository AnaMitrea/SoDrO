<?php
namespace Includes;

use Controller\AddUser;

const root = '/BackendRouting';

if(isset($_POST["submit-add"])) {
// grabbing the data
    $uid = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $dob = $_POST["dateofbirth"];

    include "backend/handlers/DatabaseHandler.php";
    include "backend/controllers/AdminController.php";
    include "backend/controllers/addUser.php";


    $addUser = new AddUser($uid, $email, $pwd, $dob);

    $addUser->addUser();

    header("location: " . root . "/profile?admin=true&error=none");
}