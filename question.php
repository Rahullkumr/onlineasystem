<?php
		session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		table{
			background: linear-gradient(57deg, #1e4d92, #ccc6dda7);
			padding: 20px;	height: 1050px;
			width: 65%;	margin: 55px;
			border: 2px solid red;
		}
		table:hover{background: linear-gradient(57deg, #00c6a7, #1e4d92);}
	</style>
	<script>
		function a()
		{
			var t = new Date();
			document.getElementById("x").innerHTML = t.toLocaleString();
		}
		setInterval(a,1000);
	</script>
	<title>Test is going on</title>
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

	$conn=mysqli_connect("localhost","id21210239_root","Rahul@123456");
	mysqli_select_db($conn,"id21210239_oas");
	$res=mysqli_query($conn,"select * from question");
	$i=0;
?>
<center>
	<form action="question.php" method=post><br>
		<table>
		<?php
			while($ou=mysqli_fetch_array($res)){
		?>
			<tr>
				<td colspan=4><?php echo "<h2>".$ou[0]."</h2>";?></td>
			</tr>
			<tr>
				<td style="background:white" id="<?php echo $i . "1";?>">
				<center>
				<input type="radio" name="<?php echo $i;?>" value="1">
				<?php echo "<h3>".$ou[1]."</h3>";?></input>
				</center>
				</td>
				<td style="background:white" id="<?php echo $i . "2";?>">
				<center>
				<input type="radio" name="<?php echo $i;?>" value="2"><?php echo "<h3>".$ou[2]."</h3>";?></input>
				</center>
				</td>
				<td style="background:white" id="<?php echo $i . "3";?>">
				<center>
				<input type="radio" name="<?php echo $i;?>" value="3"><?php echo "<h3>".$ou[3]."</h3>";?></input>
				</center>
				</td>
				<td style="background:white" id="<?php echo $i . "4";?>">
				<center>
				<input type="radio" name="<?php echo $i;?>" value="4"><?php echo "<h3>".$ou[4]."</h3>";?></input>
				</center>
				</td>
			</tr>
			<?php
			$re[$i]=$ou[5];
			$i++;
			}
			?>
		</table>
<?php
if(!isset($_REQUEST["x"]))
{
?>
<button type="submit" name="x">submit</button><br><br>
<?php
}
?>
</form>
<center>
<?php
if(isset($_REQUEST["x"]))
{
$t=0;
if(isset($_REQUEST["0"]))
if($re[0]==($a0=$_REQUEST["0"]))
{
$t++;
?>
<script>
t0="0"+<?php echo $a0;?>;
document.getElementById(t0).style="background:green";
</script>
<?php
}
else
{
?>
<script>
t0="0"+<?php echo $a0;?>;
document.getElementById(t0).style="background:red";
</script>
<?php
}
if(isset($_REQUEST["1"]))
if($re[1]==($a1=$_REQUEST["1"]))
{
$t++;
?>
<script>
t1="1" + <?php echo $a1;?>;
document.getElementById(t1).style="background:green";
</script>
<?php
}
else
{
?>
<script>
t1="1" + <?php echo $a1;?>;
document.getElementById(t1).style="background:red";
</script>
<?php
}
if(isset($_REQUEST["2"]))
if($re[2]==($a2=$_REQUEST["2"]))
{
$t++;
?>
<script>
t2="2" + <?php echo $a2;?>;
document.getElementById(t2).style="background:green";
</script>
<?php
}
else
{
?>
<script>
t2="2" + <?php echo $a2;?>;
document.getElementById(t2).style="background:red";
</script>
<?php
}
if(isset($_REQUEST["3"]))
if($re[3]==($a3=$_REQUEST["3"]))
{
$t++;
?>
<script>
t3="3" + <?php echo $a3;?>;
document.getElementById(t3).style="background:green";
</script>
<?php
}
else
{
?>
<script>
t3="3" + <?php echo $a3;?>;
document.getElementById(t3).style="background:red";
</script>
<?php
}
if(isset($_REQUEST["4"]))
if($re[4]==($a4=$_REQUEST["4"]))
{
$t++;
?>
<script>
t4="4" + <?php echo $a4;?>;
document.getElementById(t4).style="background:green";
</script>
<?php
}
else
{
?>
<script>
t4="4" + <?php echo $a4;?>;
document.getElementById(t4).style="background:red";
</script>
<?php
}
if(isset($_REQUEST["5"]))
if($re[5]==($a5=$_REQUEST["5"]))
{
$t++;
?>
<script>
t5="5" + <?php echo $a5;?>;
document.getElementById(t5).style="background:green";
</script>
<?php
}
else
{
?>
<script>
t5="5" + <?php echo $a5;?>;
document.getElementById(t5).style="background:red";
</script>
<?php
}
if(isset($_REQUEST["6"]))
if($re[6]==($a6=$_REQUEST["6"]))
{
$t++;
?>
<script>
t6="6" + <?php echo $a6;?>;
document.getElementById(t6).style="background:green";
</script>
<?php
}
else
{
?>
<script>
t6="6" + <?php echo $a6;?>;
document.getElementById(t6).style="background:red";
</script>
<?php
}
if(isset($_REQUEST["7"]))
if($re[7]==($a7=$_REQUEST["7"]))
{
$t++;
?>
<script>
t7="7" + <?php echo $a7;?>;
document.getElementById(t7).style="background:green";
</script>
<?php
}
else
{
?>
<script>
t7="7" + <?php echo $a7;?>;
document.getElementById(t7).style="background:red";
</script>
<?php
}
if(isset($_REQUEST["8"]))
if($re[8]==($a8=$_REQUEST["8"]))
{
$t++;
?>
<script type="text/javascript">
t8="8" + <?php echo $a8;?>;
document.getElementById(t8).style="background:green";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
t8="8" + <?php echo $a8;?>;
document.getElementById(t8).style="background:red";
</script>
<?php
}
if(isset($_REQUEST["9"]))
if($re[9]==($a9=$_REQUEST["9"]))
{
$t++;
?>
<script>
t9="9" + <?php echo $a9;?>;
document.getElementById(t9).style="background:green";
</script>
<?php
}
else
{
?>
<script>
t9="9" + <?php echo $a9;?>;
document.getElementById(t9).style="background:red";
</script>
<?php
}
echo "<br><h1>Total correct answers are : ".$t."</h1><br><br><br>";
}
?>