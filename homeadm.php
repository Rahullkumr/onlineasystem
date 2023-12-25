<?php
		session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="headfoot.css">
	<title>Admin Login</title>
	<style>
		body{background: linear-gradient(57deg, #00c6dda7, #1e4d92);}

	</style>
</head>

<body onload="a()">
	<span id="x"; style="margin-left: 20px;"></span>
	<span style="margin-left: 70%;">Visitor : <?php echo $_SESSION["visitor"]?></span>
	<header class="site-headers">
		<nav>
			<div class="logo">
				<h1 id="name">Automatic Internal Assessment System</h1>
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="register.php">Sign Up </a></li>
					<li><a href="login.php">Login </a></li>
					<li><a href="help.php">Help</a></li>
					<li><a href="aboutus.php">About</a></li>
					<li><a href="contactus.php">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>


		<center>
			<h1 style="color:white; font-size: 50px;margin-top: 150;">Welcome To Admin Login Page</h1>
			<br><br><br>
			<form action="loginadm.php">
				<button type="submit">Login as Admin</button>
			</form>
		</center>
		
	<script>
		function a()
		{
			var t = new Date();
			document.getElementById("x").innerHTML = t.toLocaleString();
		}
		setInterval(a,1000);
	</script>
</body>
</html>
