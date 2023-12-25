<?php
	session_start();
	$t = $_SESSION["visitor"];
	$_SESSION["visitor"] = $t + 1;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
</head>
<body>
	<header class="site-headers">
		<nav>
			<div class="logo">
				<h1 id="name">Automatic Internal Assessment System</h1>
			</div>
			<div class="menu">
				<ul>
					<li><a href="register.php">Sign Up </a></li>
					<li><a href="login.php">Login </a></li>
					<li><a href="help.php">Help</a></li>
					<li><a href="aboutus.php">About</a></li>
					<li><a href="contactus.php">Contact</a></li>
				</ul>
			</div>
		</nav>
		<section>
			<div class="leftside">
				<img src="blb.gif">
			</div>
			<div class="rightside">
				<h1>TEST YOUR SKILLS</h1>
				<p>We welcome you to enhance your knowledge</p>
				<a href = "help.php"><button>Welcome</button></a>
			</div>
		</section>

	</header>
</body>
</html>