<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Login/Sign in</title>
	<link rel="stylesheet" href="style-login-signup.css">
</head>
<body>

<div class="animations">
	<div id="page-title" class="slide-bottom-title">
		<p>SoftDrinks</p>
	</div>
	<div id="motto" class="slide-bottom-motto">
		<p>The drinks that bring out the best in you</p>
	</div>
	<div id="beverage-icons">
		<img class="animation-table" src="../images/beverage_icons/tableAnimation.gif" alt="table image">
	</div>
</div>
<!-- Login/Sign in form -->
<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
        <form action="../includes/signup.inc.php" method="POST">
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

	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>Log in</h2>
			
			<form action="../includes/login.inc.php" method="POST">
                <div class="form-holder">
                    <input type="email" name="email" class="input"  placeholder="Email" />
                    <input type="password" name="password" class="input" placeholder="Password" />
                </div>
                <button class="submit-btn" type="submit" name="submit">LOGIN</button>
            </form>

			<a href="change-psswd.html">Forgot Your Password?</a>
			<button type="button" class="login-with-google-btn" >
				Sign in with Google
			</button>

		</div>
	</div>
</div>

<!-- Script  -->
<script src="loginScript.js"></script>

</body>
</html>