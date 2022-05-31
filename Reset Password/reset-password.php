<?php

?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Login/Sign in</title>
    <link rel="stylesheet" href="style-login-signup.css">
</head>
<body>
    <h1>Reset your password</h1>
    <p>You will receive an email with a link</p>
    <form action="reset-request.php" method="post">
        <input type="text" name="email" placeholder="Enter your email adress">
        <button type="submit" name="reset-request-submit">Receive new password by email</button>
    </form>
    <?php
        if(isset($_GET["reset"])){
            if($_GET["reset"] == "success"){
                echo '<p class="signupsuccess"> Check your e-mail!</p>';
            }
        }
    ?>


</body>
</html>
