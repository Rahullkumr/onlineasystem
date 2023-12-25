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
	$conn=mysqli_connect("localhost","id21210239_root","Rahul@123456");
	mysqli_select_db($conn,"id21210239_oas");
	$res=mysqli_query($conn,"select max(Slno) from reg");
	$row=mysqli_fetch_array($res);
	$sl=$row[0];
	$sl=$sl+1;
	$post=$_FILES['f']['tmp_name'];
	$path="image/";
	$path=$path.$sl.".jpg";
	move_uploaded_file($post,$path);
	$a=$_REQUEST["a"];
	$b=$_REQUEST["b"];
	$c=$_REQUEST["c"];
	$d=$_REQUEST["d"];
	$e=$_REQUEST["e"];
	$f=$sl.".jpg";
	//echo $sl.$a.$b.$c.$d.$e.$f;
	if(mysqli_query($conn,"insert into reg values ($sl,'$a','$b','$c','$d','$e','$f')"))
		echo " ";
	else
		echo "unsuccessful";
	?>
	<center><br><br><br><br>
		<table>
			<tr>
				<td><h1>Registration Successful!</h1></td>
			</tr>
		</table>
	</center>
	<form action="login.php">
		<center><br><br><br><br>
			<button type="submit">Let's GO</button>
		</center>
	</form>
	<?php
}
?>