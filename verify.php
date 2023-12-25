<?php
		session_start();
?>
<head>
	<style>
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
	<title>verify</title>
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
				<h1 id="name" style="color:white;">Automatic Internal Assessment System</h1>
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

<?php
	if(isset($_REQUEST["x"]))
	{
			$a=$_REQUEST["a"];
			$b=$_REQUEST["b"];
			$conn=mysqli_connect("localhost","id21210239_root","Rahul@123456");
			mysqli_select_db($conn,"id21210239_oas");
			if($res=mysqli_query($conn,"select img, name from reg where email='$a' and pswd='$b'")){
				if($row=mysqli_fetch_array($res)){
					?><br><br><br><br><br>
					<form action="select.php" method="post">
						<center>
							<input type=text name="na" style="display:none" value=<?php echo $row[1]; ?>>
							<input type=text name="im" style="display:none" value=<?php echo $row[0]; ?>>
							<button type="submit" name="x">Login Successful</button>
						</center>
					</form>
					<?php
				}
				else{
					?>
					<center><br><br><br><br>
						<table>
							<tr>
								<td><h1>Login Unsuccessful! Incorrect Password or Email</h1></td>
							</tr>
						</table>
					</center>
					<?php
				}
			}
			else{
				?>
				<center><br><br><br><br>
					<table>
						<tr>
							<td><h1>Please Login after getting Registered</h1></td>
						</tr>
					</table>
				</center>
				<?php
			}
	}	
?>