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
			<a href='index.php' class='w3-btn w3-round w3-white w3-xlarge w3-right'>Menu</a>
	</div>
			</br></br>
			<center><h2 class="w3-indigo w3-xxxlarge font1 w3-wide">Resource Pool</h2></center><br><br>
<?php
include ("resource1.php");
?> 
<table class='w3-table w3-margin w3-border w3-white' border='1'><tr>
<th>ID</th>
<th>Name</th>
<th>Skills</th>
<th>status</th>
</tr>
<?php
$select="select * from resource_pool";
$run=mysqli_query($mysqli,$select);
while($row=mysqli_fetch_array($run))
{

?>
	<?php $no=$row['res_no'];?>
	<tr><td><?php echo $no?></td>
	<td><?php echo $row['name']?></td>
	<td><?php echo $row['skills']?></td>
	<td><?php echo $row['status'];
	echo "<form action='pool_track.php' type='get'>
		<input type='hidden' name='id' value='$no'/>
		<select name='status'>
	  <option value='Allocated'>Allocated</option>
		</select>
		<button type='submit' class='w3-btn ad_btn w3-border w3-large w3-border-green w3-green'>Update</button>
		</form></td>
	</tr>";
} 
?>
<?php
include ("resource1.php");
if (isset ($_GET['id']))
{ 
	$id=$_GET['id'];
	$status=$_GET['status'];
	$sql1="UPDATE resource_pool SET status='$status' where res_no=$id";
	$result1=mysqli_query($mysqli,$sql1);
}
?>
</table>

<br>
<a href="add_pool.php" class="w3-btn w3-margin w3-padding w3-blue w3-large w3-border w3-margin">Send new request</a>
</body>