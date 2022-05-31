<?php
include "databasehandler.php";
if(isset($_POST["reset-request-submit"])){

    $selector =bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost/Reset%20Password/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;
    echo "salut";
    $dbh =new DatabaseHandler();
    $pdo=$dbh->getConn();

    $userEmail = $_POST["email"];

    $sql= "DELETE from pwdreset where pwdresetemail=?;";
    $stmt= $pdo->prepare($sql);
    if(!$pdo->prepare($sql)){
        echo "There was an error!";
        exit();
    }else{
        $stmt->execute(array($userEmail));
    }

    $sql= "Insert into pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";

    $stmt= $pdo->prepare($sql);
    if(!$pdo->prepare($sql)){
        echo "There was an error!";
        exit();
    }else{
        $hashedToken= password_hash($token, PASSWORD_DEFAULT);
        $stmt->execute(array($userEmail, $selector, $hashedToken, $expires));
    }

    $to = $userEmail;

    $subject = 'Reset your password for SoDro';

    $message = '<p>We received a password reset request.</p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a> </p>';

    $headers="From: SoDro <sodroproject@gmail.com>\r\n";
    $headers .="Reply-To sodroproject@gmail.com\r\n";
    $headers .="Content-type: text/html\r\n";

    mail($to,$subject, $message, $headers);

    header("Location: reset-password.php?reset=success");
}else{
    header("Location: login.php");

}