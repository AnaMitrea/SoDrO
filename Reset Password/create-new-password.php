<?php

?>

<main>
    <>
    <?php
        $selector = $_GET["selector"];
        $validator =$_GET["validator"];

        if(empty($selector) || empty($validator)){
            echo "We could not vallidate your request!";
        }else{
            if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
                ?>
                <form action="reset-password.inc.php" method="post">
                    <input type="hidden" name="selector" value="<?php echo $selector ?>">
                    <input type="hidden" name="validator" value="<?php echo $validator ?>">
                    <input type="password" name="pwd" placeholder="Enter a new password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat new password">
                    <button type="submit" name="reset-password-submit">Reset Password</button>
                </form>
                <?php
            }
        }
    ?>
    </body>
</main>
