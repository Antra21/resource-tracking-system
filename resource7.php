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
				.w3-500{
				width:500px;
				}
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
			<script>
					$(document).on("click","#ad_btn",function(){
						$("#modal1").fadeIn();
					});
					$(document).on("click","#closebtn",function(){
						$("#modal1").fadeOut();
					});
			</script>
</head>
<body class="bck">
<div class="w3-container">
			<center><h1 class="w3-card-4 w3-wide w3-white w3-text-indigo font2">ONLINE RESOURCE TRACKING SYSTEM</h1></center>
			<a href="index.php" class="w3-btn w3-round w3-white w3-xlarge w3-right">Menu</a>
		</div>
			</br></br></br></br>
		<div class="w3-modal" id="modal1">
			<div class="w3-modal-content w3-card-4 w3-white w3-500">
				<div class="w3-bar w3-green">
					<div class="w3-bar-item">
						Add details
					</div>
					<button class="w3-button w3-red w3-bar-item w3-right" id="closebtn">
						&times;
					</button>
				</div>
				<div class="w3-padding">
					<form action="resource7.php" class="w3-border-green" method="POST">
						<input type="text" placeholder="Enter Detail" name="detail" class="w3-input w3-border"/><br/>
						<input type="text" class="w3-input w3-border" name="val" placeholder="Enter Value"/><br/>
						<input class="w3-btn w3-green" type="submit" name="sub1" value="Add">
					</form>
				</div>
			</div>
		</div>
<form class="w3-padding w3-margin w3-border w3-border-white" method="post">
<center><h2 class="w3-indigo w3-xxlarge font1 w3-wide">Enter Resource Details</h2></center><br><br>
<input type="text" class="w3-input w3-border w3-border-green" name="name" placeholder="Enter Name"><br><br>
<input type="text" class="w3-input w3-border w3-border-green"  name="skills" placeholder="Enter skills required"><br><br>
<input type="text" class="w3-input w3-border w3-border-green"  name="intdate" placeholder="Enter interview date"><br><br>
<input type="text" class="w3-input w3-border w3-border-green"  name="interviewer" placeholder="Enter interviewer name"><br><br>

<?php
include ("resource1.php");
if (isset($_POST['sub1']))
{
	$detail=$_POST['detail'];  
	$val=$_POST['val'];
	$sql="ALTER TABLE `records` ADD `$detail` VARCHAR(50) NOT NULL AFTER `salary`;";
	$result=mysqli_query($mysqli,$sql);
	if ((empty ($result))) 
	{
	echo "<h2 class='w3-text-red'>Detail not Added</h2>";
	}
	else
	{
		echo "<h2 class='w3-text-green'>Detail Added</h2>";
		echo("<input type='text' class='w3-input w3-border w3-border-green'  name=`$detail` placeholder='Enter $detail'><br><br>");
	}
}
?>
<input type="submit" class="w3-btn w3-border w3-large w3-border-green w3-green"  name="sub" value="Enter" align="center">
&nbsp &nbsp &nbsp 
</form>
<button class="w3-btn w3-margin w3-blue" id="ad_btn"> Add more details</button>
<?php
if (isset ($_POST['sub'])){
	$name=$_POST['name'];  
	$skills=$_POST['skills'];
	$intdate=$_POST['intdate'];
	$interviewer=$_POST['interviewer'];
	
	$sql="INSERT INTO `records`(`name`,`skills`,`intdate`,`interviewer`) VALUES ('$name','$skills','$intdate','$interviewer')";
	$result=mysqli_query($mysqli,$sql);
if (empty ($result)) {
	echo "<h2 class='w3-text-red'>Record not Inserted</h2>";
}
else{
	echo "<h2 class='w3-text-green'>Record Inserted</h2>";
}
}
?>

		<a href="res_track.php" class="w3-btn w3-margin w3-padding w3-red w3-large w3-border w3-margin">view record</a>
</body>