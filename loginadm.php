<?php
	session_start();
?>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="headfoot.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
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
			border-radius: 170px 0px;
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
					<li><a href="login.php">Login </a></li>
					<li><a href="help.php">Help</a></li>
					<li><a href="aboutus.php">About</a></li>
					<li><a href="contactus.php">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header><br><br>
	<form>
		<center>
		<table>
			<tr>
				<td colspan="2"><h1><u>Admin Login</u></h1></td>
			</tr>
			<tr>
				<td>User Name:</td>
				<td><input type="text" id="UN" name="u" required></input></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" id="PASS" name="p" required></input></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" id="sub" name="x">Login</button></td>
			</tr>
		</table>
		</center>
	</form>
	<?php
		if(isset($_REQUEST["x"])){
			$nfs=$_REQUEST["u"];
    		$hjg=$_REQUEST["p"];
    		echo($nfs);	echo($hjg);
			if($nfs=="Rahul" & $hjg=="1234"){
				?>
					<script>window.location.replace("quesupd.php");</script>
				<?php
			}
			else{
				?>
					<script>window.location.replace("error.php");</script>
				<?php
			}
		}
	?>
</body>
</html>
