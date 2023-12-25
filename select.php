<?php
		session_start();
?>
<head>
	<style>
		table{
			border-radius: 170px 0px;
			height: 70%; width: 40%;
			border: 2px solid red;
			padding: 45px;
			background: linear-gradient(57deg, #1e4d92, #00c6dda7);
		}
		td{text-align: center;font-weight: bold;}
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
	<title>		</title>
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
					<li><a href="aboutus.php">About</a></li>
					<li><a href="contactus.php">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>
</body>

<?php
	if(isset($_REQUEST["x"]))
	{
		$n=$_REQUEST["na"];
		$i=$_REQUEST["im"];
		$i="image/".$i;
	}
?><br><br>
<center>
<table>
	<tr>
		<td>
			<h1><u style="color:white;font-size: 45px;">WELCOME</u></h1><br>
			<h2 style="color: "><?php echo $n; ?></h2>
			<img src='<?php echo $i; ?>' style="width:140; height:140;border: 2px solid red;">
			<form action="question.php"><br>
				<button type="submit">Assessment</button>
			</form>
		</td>
	</tr>
</table></center>


