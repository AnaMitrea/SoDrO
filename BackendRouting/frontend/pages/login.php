<?php
$root = '/BackendRouting';
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Login/Sign in</title>
    <link rel="shortcut icon" type="image/x-icon" href="frontend/images/favicon.svg" />
	<link rel="stylesheet" href="frontend/stylesheets/style-login-signup.css">
</head>
<body>
    <!-- Left side Animations -->
    <div class="animations">
        <div id="page-title" class="slide-bottom-title">
            <p>SoftDrinks</p>
        </div>
        <div id="motto" class="slide-bottom-motto">
            <p>The drinks that bring out the best in you</p>
        </div>
        <div id="beverage-icons">
            <img class="animation-table" src="frontend/images/beverage_icons/tableAnimation.gif" alt="table image">
        </div>
    </div>
    <!-- Login/Sign up form -->
    <div class="form-structor">
        <!-- Sign up -->
        <div class="signup">
            <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
            <!-- Form -->
            <form action="<?php echo $root?>/signup" method="POST">
                <div class="form-holder">
                    <input type="text" class="input" name="uid" placeholder="Username" />
                    <input type="email" class="input" name="email" placeholder="Email" />
                    <input type="password" class="input" name="pwd" required="" placeholder="Password" />
                    <input type="password" class="input" name="pwdRepeat" required="" placeholder="Confirm Password" />
                    <input type="date" class="input" name="dob" placeholder="Date Of Birth" />
                </div>
                <button class="submit-btn" type="submit" name="signup">Sign up</button>
            </form>
        </div>
        <!-- -->
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login"><span>or</span>Log in</h2>

                <form action="<?php echo $root?>/login" method="POST">
                    <div class="form-holder">
                        <input type="email" class="input" name="email"  placeholder="Email" />
                        <input type="password" class="input" name="password"  placeholder="Password" />
                    </div>
                    <button class="submit-btn" type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </div>


<!-- Script  -->
<script src="frontend/scripts/loginScript.js"></script>
</body>
</html>