<?php
	require("connection.php");
?>
<?php
	require("links.php");
?>
<head>
		<link href="https://fonts.googleapis.com/css?family=Cute+Font&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
			<style>
				.bck{
					background: linear-gradient(to bottom, #666699 0%, #ffffff 100%);
				}
				.font1{
					font-family: 'Cute Font', cursive;
				}
				.font2{
					font-family: 'Anton', sans-serif;
				}
			</style>
</head>
<body class="bck">
<div class="w3-container">
			<center><h1 class="w3-card-4 w3-wide w3-white w3-text-indigo font2">ONLINE RESOURCE TRACKING SYSTEM</h1></center>
			<a href="index.php" class="w3-btn w3-round w3-white w3-xlarge w3-right">Menu</a>
		</div>
			</br></br>
<form class="w3-padding w3-margin w3-border w3-border-white" method="post">
<center><h2 class="w3-indigo w3-xxlarge font1 w3-wide">Enter new Admin</h2></center><br><br>
<input type="text" class="w3-input w3-border w3-border-green" name="name" placeholder="Enter Name"><br><br>
<input type="text" class="w3-input w3-border w3-border-green"  name="mail" placeholder="Enter Email"><br><br>
<input type="text" class="w3-input w3-border w3-border-green"  name="pass" placeholder="Enter password"><br><br>
<input type="text" class="w3-input w3-border w3-border-green"  name="id" placeholder="Enter employee id"><br><br>
<input type="submit" class="w3-btn w3-border w3-large w3-border-green w3-green"  name="sub" value="Enter" align="center"><br><br>
</form>
<?php
include ("resource1.php");
if (isset ($_POST['sub'])){ 
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	$eid=$_POST['id'];
	$sql="INSERT INTO `employee`(`name`, `email`, `id`, `password`) VALUES ('$name','$mail','$eid','$pass')";
	$result=mysqli_query($mysqli,$sql);
if (empty ($result)) {
	echo "<h2 class='w3-text-red'>Record not Inserted</h2>";
}
else{
	echo "<h2 class='w3-text-green'>Record Inserted</h2>";
}
}
?>
		<a href="view_admin.php" class="w3-btn w3-margin w3-padding w3-blue w3-large w3-border w3-margin">view admins</a>
</body>