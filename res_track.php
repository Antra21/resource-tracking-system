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
			<center><h2 class="w3-indigo w3-xxxlarge font1 w3-wide">Resource Details</h2></center><br><br>
<?php
include ("resource1.php");
$sql="SELECT * FROM `records` WHERE 1";
$result=mysqli_query($mysqli,$sql);
?> 
<table class='w3-table tt w3-margin w3-border w3-white' border='1'><tr>
<th>ID</th>
<th>Name</th>
<th>Skills</th>
<th>Interview Date</th>
<th>Interviewer</th>
<th>status</th>
<th>recruitment date</th>
<th>project name</th>
<th>feedback</th>
<th>salary</th>
<th>forward request to company</th>
<th>recieved CV by company date</th>
<th>type</th>
<th>interview feedback date</th>
<th>rcpcd</th>
<th>cpd</th>
<th>srd</th>
<th>od</th>
<th>Action</th>
</tr>
<?php
$select="select * from records";
$run=mysqli_query($mysqli,$select);
while($row=mysqli_fetch_array($run))
{
$user_id=$row['id'];
$user_name=$row['name'];
$user_skills=$row['skills'];
$user_intdate=$row['intdate'];
$user_interviewer=$row['interviewer'];
$user_status=$row['status'];
$user_rctdate=$row['rctdate'];
$user_pname=$row['pname'];
$user_feedback=$row['feedback'];
$user_salary=$row['salary'];
$user_frcd=$row['frcd'];
$user_rccd=$row['rccd'];
$user_type=$row['type'];
$user_ifd=$row['ifd'];
$user_rcpcd=$row['rcpcd'];
$user_cpd=$row['cpd'];
$user_srd=$row['srd'];
$user_od=$row['od'];
if(($user_status=='Hired & on-board')&&($user_pname='pool'))
{
	$sql="INSERT INTO `resource_pool`(`res_no`, `name`, `skills`, `status`) VALUES ('$user_id','$user_name','$user_skills','Availaible')";
	$result=mysqli_query($mysqli,$sql);
}
?>

	<tr><td><?php echo $user_id ?></td>
	<td><?php echo $user_name ?></td>
	<td><?php echo $user_skills ?></td>
	<td><?php echo $user_intdate ?></td>
	<td><?php echo $user_interviewer ?></td>
	<td><?php echo $user_status?></td>
	<td><?php echo $user_rctdate ?></td>
	<td><?php echo $user_pname?></td>
	<td><?php echo $user_feedback ?></td>
	<td><?php echo $user_salary ?></td>
	<td><?php echo $user_frcd ?></td>
	<td><?php echo $user_rccd ?></td>
	<td><?php echo $user_type ?></td>
	<td><?php echo $user_ifd?></td>
	<td><?php echo $user_rcpcd ?></td>
	<td><?php echo $user_cpd?></td>
	<td><?php echo $user_srd ?></td>
	<td><?php echo $user_od ?></td>
	<td><a class='w3-btn w3-border w3-large w3-border-green w3-green' href='res_track.php?edit=<?php echo $user_id; ?>'>update</a></td>
	</tr>
<?php } ?>
</table>

<?php
	if(isset($_GET['edit'])){
	include("edit.php");
	}
	?>
<br>
</body>
</head>