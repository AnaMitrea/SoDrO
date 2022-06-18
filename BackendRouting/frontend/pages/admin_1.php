<?php

if(!isset($_SESSION)) {
    session_start();
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
</div>

<?php
   if(isset($_SESSION["username"])) {
    echo "<a> Salut " . $_SESSION["username"] . "!</br></a>";
    echo "<a> Salut " . $_SESSION["email"] . "!</br></a>";
    echo "<a> Salut " . $_SESSION["password"] . "!</br></a>";

    echo session_decode();
   }
   else echo "NU";
?>
<!-- Script  -->
<script src="loginScript.js"></script>

</body>
</html>