<?php
		session_start();
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="headfoot.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
	<script>
		function a()
		{
			var t = new Date();
			document.getElementById("x").innerHTML = t.toLocaleString();
		}
		setInterval(a,1000);
	</script>
	<style>
		table{
			border-radius: 160px 0px;
			height: 65%; width: 35%;
			border: 2px solid red;
			padding: 35px;
			background: linear-gradient(57deg, #1e4d92, #00c6dda7);
		}
		td{text-align: center;font-weight: bold;}
		h1{color: white; font-size: 40;}
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
					<!--<li><a href="login.php">Login </a></li>-->
					<li><a href="help.php">Help</a></li>
					<li><a href="aboutus.php">About</a></li>
					<li><a href="contactus.php">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header><br><br>
	<form action="verify.php" method=post>
		<center>
		<table>
			<tr>
				<td colspan="2"><h1><u>Login Form</u></h1></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name = a required></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name = b required></td>
			</tr>
			<tr>
				<td><button type="reset">Reset</button></td>
				<td><button type="submit" name="x">Login</button></td>
			</tr>
		</table>
		</center>
	</form>
</body>
</html>
