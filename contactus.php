<?php
session_start();
?>
<html>
<head>
	<style>
		u{color: white; font-size: 35px;}
		img{border-radius: 360px;}
		table{
			border-radius: 150px 0px;
			height: 70%; width: 40%;
			border: 2px solid red;
			padding: 40px; margin: 10px;
			background: linear-gradient(77deg, #1e4d92, #00c6dda7);
		}
		td{text-align: center;font-weight: bold;font-size: 18px;}
		h1{color: white; font-size: 37;}
	</style>
	<script>
		function a()
		{
			var t = new Date();
			document.getElementById("x").innerHTML = t.toLocaleString();
		}
		setInterval(a,1000);
	</script>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="headfoot.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
</head>
<body onload="a()">
	<span id="x"; style="margin-left: 20px;"></span>
	<span style="margin-left: 70%;"><a href="homeadm.php" style="color:black;">Visitor : <?php echo $_SESSION["visitor"]?></a></span>
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
	</header><center><br>
	<table>
	    <tr>
	        <th colspan=2><u>Developer</u></th>
	    </tr>
		<tr>
			<td>
				<img src="rahul.png" height=200 width=200>
			</td>
			<td>Rahul Kumar <br><br> rahulbkba@gmail.com</td>
		</tr>
	</table></center>
</body>
</html>