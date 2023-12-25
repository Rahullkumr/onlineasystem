<?php
		session_start();
?>
<html>
<head>
	<style>
		table{
			border-radius: 170px 0px;
			border: 2px solid red;
			background: linear-gradient(57deg, #1e4d92, #00c6dda7);
			padding: 45px;
			margin: 40;
		}
		h1{color: white;}
		h2{color: white;
			opacity: .9;
			font-size: 1.4em;
		}
	</style>
	<script>
		function a()
		{
			var t = new Date();
			document.getElementById("x").innerHTML = t.toLocaleString();
		}
		setInterval(a,1000);
	</script>
	<title>help</title>
	<link rel="stylesheet" type="text/css" href="headfoot.css">
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
					<!--<li><a href="help.php">Help</a></li>-->
					<li><a href="aboutus.php">About</a></li>
					<li><a href="contactus.php">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<center>
		<table style="width:40%; height:65%">
			<tr>
				<td>
					<center>
						<h1><u>FAQs</u></h1>
					</center>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						<h2>Is it compulsory to register?</h2><br>
						<h3>Yes, it is compulsory to register to attain the facilities provided by the site.</h3>
					</center>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						<h2>Do I have to pay to get registered?</h2><br>
						<h3>No, it is a free site.</h3>
					</center>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						<h2>Why do I have to provide my email id?</h2><br>
						<h3>So that we can contact you in case of any difficulty and to receive your result by email.<h3>
					</center>
				</td>
			</tr>
		</table>
	<center>
</body>
</html>