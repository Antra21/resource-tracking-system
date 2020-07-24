<?php
	require("connection.php");
?>
<?php
	require("links.php");
?>
<html>
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
				.tt{
					margin-right:30px;
				}
</style>
</head>
<body class="bck">
	<div class="w3-container">
			<center><h1 class="w3-card-4 w3-wide w3-white w3-text-indigo font2">ONLINE RESOURCE TRACKING SYSTEM</h1></center>
			<a href="index.php" class="w3-btn w3-round w3-white w3-xlarge w3-right">Menu</a>
		</div>
			</br></br>
			<center><h2 class="w3-indigo w3-xxxlarge font1 w3-wide">status Details</h2></center><br><br>
<?php
include ("resource1.php");
$sql="SELECT * FROM `records` WHERE 1";
$result=mysqli_query($mysqli,$sql);
?> 

<?php
$select1="select status from records where status='Hired'";
$select2="select status from records where status='Hired & on-board'";
$select3="select status from records where status='Rejected'";
$select4="select * from requests";

$run1=mysqli_query($mysqli,$select1);
$run2=mysqli_query($mysqli,$select2);
$run3=mysqli_query($mysqli,$select3);
$run4=mysqli_query($mysqli,$select4);
$resultcheck1=mysqli_num_rows($run1);
$resultcheck2=mysqli_num_rows($run2);
$resultcheck3=mysqli_num_rows($run3);
$resultcheck4=mysqli_num_rows($run4);
?>



<table class='w3-table tt w3-margin w3-border w3-white' border='1'><tr>
<td>Hired</td>
<th><?php echo $resultcheck1 ?></th></tr>
<tr><td>Hired & onboard</td>
<th><?php echo $resultcheck2 ?></th></tr>
<tr><td>rejected</td>
<th><?php echo $resultcheck3 ?></th></tr>
<tr><td>requested</td>
<th><?php echo $resultcheck4 ?></th></tr>

<tr>
	
	
	
	</tr>



