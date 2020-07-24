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
			<a href="index1.php" class="w3-btn w3-round w3-white w3-xlarge w3-right">Menu</a>
		</div>
		</br></br>
<form action="add_req.php" class="w3-padding w3-margin w3-border w3-border-white" method="post">
<center><h2 class="w3-indigo w3-xxlarge font1 w3-wide">Enter new Request</h2></center><br><br>
<input type="text" class="w3-input w3-border w3-border-green" name="pname" placeholder="Enter Project Name"><br><br>
<input type="text" class="w3-input w3-border w3-border-green"  name="skill" placeholder="Enter Skill set"><br><br>
<input type="text" class="w3-input w3-border w3-border-green"  name="resc_no" placeholder="Enter no. of resources"><br><br>
<input type="text" class="w3-input w3-border w3-border-green"  name="req" placeholder="Enter Requestor name"><br><br>
<input type="submit" class="w3-btn w3-border w3-large w3-border-green w3-green"  name="sub" value="Send" align="center"><br><br>
</form>
<?php

include ("resource1.php");
if (isset ($_POST['sub']))
{ 
	$res_no=$_POST['resc_no'];
	$skill=$_POST['skill'];
	$pname=$_POST['pname'];
	$req=$_POST['req'];
	$date= date('Y/m/d');
	$sql="INSERT INTO `requests`(`proj_name`, `skill_set`, `no_resc`, `requestor`,`req_date`) VALUES ('$pname','$skill','$res_no','$req','$date')";
	$result=mysqli_query($mysqli,$sql);
if (empty ($result)) 
{
	echo "<h2 class='w3-text-red'>Record not Inserted</h2>";
}
else
{
	echo "<h2 class='w3-text-green'>Record Inserted</h2>";
}
}
?>
		<a href="req_resc.php" class="w3-btn w3-margin w3-padding w3-blue w3-large w3-border w3-margin">requests tracker</a>
</body>