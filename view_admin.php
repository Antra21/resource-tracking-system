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
</style>
</head>
<body class="bck">
	<div class="w3-container">
			<center><h1 class="w3-card-4 w3-wide w3-white w3-text-indigo font2">ONLINE RESOURCE TRACKING SYSTEM</h1></center>
			<a href="index.php" class="w3-btn w3-round w3-white w3-xlarge w3-right">Menu</a>
		</div>
			</br></br>
			<center><h2 class="w3-indigo w3-xxxlarge font1 w3-wide">ADMINS</h2></center><br><br>
<?php
include ("resource1.php");
$sql="SELECT * FROM `employee`";
$result=mysqli_query($mysqli,$sql); 
echo "<table class='w3-table w3-margin w3-border w3-white' border='1'><tr>
<th>Name</th>
<th>Email-id</th>
<th>ID</th>
</tr>";

foreach ($result as $row) {
	echo "<tr><td>" .$row['name']. "</td>
	<td> " .$row['email']. "</td>
	<td>" .$row['id']. "</td>
	</tr>";
}
echo "</table>"
?>
<br>
</body>
</head>