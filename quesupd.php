<?php
		session_start();
?>
<head>
	<style>
		table{
			border-radius: 170px 0px;
			height: 70%; width: 50%;
			border: 2px solid red;
			padding: 45px;
			background: linear-gradient(57deg, #1e4d92, #00c6dda7);
		}
		u{color: white;font-size: 60px;}
		td{text-align: center;font-weight: bold;}
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
{
?>
<form action="quesupd.php" method="post">
<center><br><br><br><br>
	<h1><u>Question  Search & Edit Portal</u></h1><br><br><br><br>
	<select name="se" style="height:65; width:300;">
			<option>Select question to update</option>
	<?php
	$conn=mysqli_connect("localhost","id21210239_root","Rahul@123456");
	mysqli_select_db($conn,"id21210239_oas");
	if($res=mysqli_query($conn,"select Qno from question"))
	{
	while(($row=mysqli_fetch_array($res)))
	{
	?>
	<option name="se1"><?php echo $row[0]; ?></option>
	<?php
	}
	}
	?>
	</select>
	<button type="submit" name="t4">Search</button><br><br><br>


<?php
if(isset($_REQUEST["t4"])||isset($_REQUEST["u1"]))
{
$s=$_REQUEST["se"];
if($res1=mysqli_query($conn,"select * from question where Qno=$s"))
{
$ro=mysqli_fetch_array($res1);
$_SESSION["a"]=$ro[6];
?>
</script>
<br>
<form action="quesupd.php" method="post">
<table>
<tr>
<td>Question :</td>
<td><textarea name="v0" style="height:50; width:400"><?php echo $ro[0]; ?></textarea></td>
</tr>
<tr>
<td>Option 1 :</td>
<td><input type="text" name="v1" style="height:25; width:400" value="<?php echo $ro[1]; ?>"><h2></h2></input></td>
</tr>
<tr>
<td>Option 2 :</td>
<td><input type="text" name="v2" style="height:25; width:400" value="<?php echo $ro[2]; ?>"><h2></h2></input></td>
</tr>
<tr>
<td>Option 3 :</td>
<td><input type="text" name="v3" style="height:25; width:400" value="<?php echo $ro[3]; ?>"><h2></h2></input></td>
</tr>
<tr>
<td>Option 4 :</td>
<td><input type="text" name="v4" style="height:25; width:400" value="<?php echo $ro[4]; ?>"><h2></h2></input></td>
</tr>
<tr>
<td>Answer :</td>
<td><input type="text" name="v5" style="height:25; width:400" value="<?php echo $ro[5]; ?>"><h2></h2></input></td>
</tr>
<tr>
<td colspan=2>
<center><button type="submit" name="u1">Update</button></center>
</td>
</tr>
</table>
</form><br><br>
<?php
}
}
?>
</center>
</form>
<?php
}
if(isset($_REQUEST["u1"]))
{
$v0=$_REQUEST["v0"];
$v1=$_REQUEST["v1"];
$v2=$_REQUEST["v2"];
$v3=$_REQUEST["v3"];
$v4=$_REQUEST["v4"];
$v5=$_REQUEST["v5"];
$t=$_SESSION["a"];
mysqli_query($conn,"update question set ques='$v0', a1='$v1', a2='$v2', a3='$v3',a4='$v4', val=$v5 where Qno=$t");
echo "updated";
}
?> 