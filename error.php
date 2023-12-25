<?php
		session_start();
?>
<html>
<head>
	<title>error</title>
	<link rel="stylesheet" type="text/css" href="headfoot.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style>
		body{background: linear-gradient(57deg, #00c6dda7, #1e4d92);}
		table{
			text-align: center;
			height: 50px;	width: 50px;
			margin: 50px;	padding: 50px;
			border-radius: 360px; font-size: 15px;
			border: 2px solid red;
			background: linear-gradient(57deg, #1e4d92, #99c6dda7);
		}
		table:hover{background: linear-gradient(57deg, #99c6dda7, #1e4d92);}
	</style>
	<script>
		function a()
		{
			var t = new Date();
			document.getElementById("x").innerHTML = t.toLocaleString();
		}
		setInterval(a,1000);
	</script>
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

	<center><br><br><br><br>
		<table>
			<tr>
				<td><h1>Login Unsuccessful! Incorrect Password or Email</h1></td>
			</tr>
		</table>
	</center>
</body>
</html>