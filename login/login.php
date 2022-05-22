<?php
require_once 'DatabaseHandler.php';

$dbHandler = new DatabaseHandler();
$pdo = $dbHandler->getConn();

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$email = $_POST["email"];
	$password = $_POST["password"];
	$sql = "select * from users where email='".$email."' and password='".$password."' ";
	$data = $pdo->query($sql)->fetchAll();
	foreach ($data as $row) {
		if($row["isadmin"])
            header("location:admin.php");
	}
}
 
?>

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
        <div class="form-holder">  
			<input type="text" class="input" placeholder="Name" />
			<input type="email" class="input" placeholder="Email" />
			<input type="password" class="input" required="" placeholder="Password" />
			<input type="password" class="input" required="" placeholder="Confirm Password" />
			<input type="date" class="input" placeholder="Date Of Birth" />
		</div>
		<button class="submit-btn">Sign up</button>

       

	</div>

	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>Log in</h2>
			
			<form action="#" method="POST">

			<div class="form-holder">
				<input type="email" name="email" class="input"  placeholder="Email" />
				<input type="password" name="password" class="input" placeholder="Password" />
			</div>
			<button class="submit-btn"><input type="submit" value="Login"></button>
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