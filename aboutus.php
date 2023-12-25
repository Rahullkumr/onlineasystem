<?php
session_start();
?>
<html>
<head>
	<style>
		table{
			height: 65%; width: 45%;
			border: 2px solid red;
			padding: 55px; margin: 50px;
			background: linear-gradient(57deg, #1e4d92, #00c6dda7);
			border-radius: 200px 0px;
		}
		td{text-align: center;}
		h1{color: white; font-size: 40;}
		p{font-size: 25px;}
	</style>
	<script>
		function a()
		{
			var t = new Date();
			document.getElementById("x").innerHTML = t.toLocaleString();
		}
		setInterval(a,1000);
	</script>
	<title>About this site</title>
	<link rel="stylesheet" type="text/css" href="headfoot.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
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
					<!--<li><a href="aboutus.php">About</a></li>-->
					<li><a href="contactus.php">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<center>
		<table>
			<tr>
				<td>
					<h1><u>About</u></h1><br><br>
					<p>
					    It is an online platform that provides the facility to practice sample questions of various topics of Computer Subject<br><br>
					    It's main objective is to provide a platform to the users to practice and enhance their knowledge and to provide a basic idea about the types of questions asked in exams.
					</p>
				</td>
			</tr>
		</table>
	<center>
</body>
</html>
