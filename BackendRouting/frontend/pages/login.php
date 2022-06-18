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
<!-- Login/Sign in form -->
<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
		<div class="form-holder">
			<input type="text" class="input" placeholder="Name" />
			<input type="email" class="input" placeholder="Email" />
			<input type="password" class="input" required="" placeholder="Password" />
			<input type="password" class="input" required="" placeholder="Confirm Password" />
			<input type="date" class="input" placeholder="Date Of Birth" />
		</div>
        <button class="submit-btn"><a href="<?php echo $root ?>/login">Sign up</a></button>
	</div>
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>Log in</h2>
			<div class="form-holder">
				<input type="email" class="input" placeholder="Email" />
				<input type="password" class="input" placeholder="Password" />
			</div>
            <!-- TODO: Adaugare algoritm login  -->
			<button class="submit-btn"><a href="<?php echo $root ?>/home">Log in</a></button>

			<a href="/BackendRouting/recover">Forgot Your Password?</a>
			<button type="button" class="login-with-google-btn" >
				Sign in with Google
			</button>

		</div>
	</div>
</div>

<!-- Script  -->
<script src="frontend/scripts/loginScript.js"></script>

</body>
</html>