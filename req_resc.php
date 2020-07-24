<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
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
			<?php
			if($_SESSION['login_role'] == 'proj_man')
			{
			echo "<a href='index.php' class='w3-btn w3-round w3-white w3-xlarge w3-right'>Menu</a>";
			}
			else if($_SESSION['login_role'] == 'dev_team')
			{
			echo "<a href='index1.php' class='w3-btn w3-round w3-white w3-xlarge w3-right'>Menu</a>";
			}
			else
			{
				echo "<a href='index2.php' class='w3-btn w3-round w3-white w3-xlarge w3-right'>Menu</a>";
			}
			?>
		</div>
			</br></br>
			<br>
			<center><h2 class="w3-indigo w3-xxxlarge font1 w3-wide">Requested Resources</h2></center><br><br>
<?php
include ("resource1.php");
$sql="SELECT * FROM `requests`";
$result=mysqli_query($mysqli,$sql); 
echo "<table class='w3-table w3-margin w3-border w3-white' border='1'><tr>
<th>Req.no</th>
<th>Project Name</th>
<th>Request Date</th>
<th>Skill Set</th>
<th>No. of resources</th>
<th>Status</th>
</tr>";
if($_SESSION['login_role'] == 'proj_man')
{
	foreach ($result as $row) {
		$no=$row['Req_no']; 
		$res_no=$row['no_resc'];
		$skill=$row['skill_set'];
		echo "<tr><td>$no</td>
		<td> " .$row['proj_name']. "</td>
		<td>" .$row['req_date']. "</td>
		<td>$skill</td>
		<td>$res_no</td>
		<td> " .$row['Status']. "  &nbsp 
		<form action='req_resc.php' type='get'>
		<input type='hidden' name='id' value='$no'/>
		<select name='status'>
	  <option value='Forwarded to partner'>Forwarded to partner</option>
	  <option value='Interview processed'>Interview processed</option>
	  <option value='Allocated'>Allocated</option>
		</select>
		<button type='submit' class='w3-btn ad_btn w3-border w3-large w3-border-green w3-green'>Update</button>
		</form>
		</td>
		</tr>";
	}
	echo "</table>";
}
else if($_SESSION['login_role'] == 'dev_team')
{
	foreach ($result as $row) {
		$no=$row['Req_no']; 
		echo "<tr><td>$no</td>
		<td> " .$row['proj_name']. "</td>
		<td>" .$row['req_date']. "</td>
		<td> " .$row['skill_set']. "</td>
		<td> " .$row['no_resc']. "</td>
		<td> " .$row['Status']. "  &nbsp 
		<form action='req_resc.php' type='get'>
		<input type='hidden' name='id' value='$no'/>
		<select name='status'>
	  <option value='Request granted'>Request Completed</option>
		</select>
		<button type='submit' class='w3-btn w3-border w3-large w3-border-green w3-green'>Update</button>
		</form>
		</td>
		</tr>";
	}
	echo "</table>";
}
else
{
	foreach ($result as $row) {
		$no=$row['Req_no'];
		echo "<tr><td>$no</td>
		<td> " .$row['proj_name']. "</td>
		<td>" .$row['req_date']. "</td>
		<td> " .$row['skill_set']. "</td>
		<td> " .$row['no_resc']. "</td>
		<td> " .$row['Status']. "  &nbsp 
		<form action='req_resc.php' type='get'>
		<input type='hidden' name='id' value='$no'/>
		<select name='status'>
	  <option value='CV sent from partner'>CV Sent</option>
		</select>
		<button type='submit' class='w3-btn w3-border w3-large w3-border-green w3-green'>Update</button>
		</form>
		</td>
		</tr>";
	}
	echo "</table>";
}

?>

<?php
include ("resource1.php");
if (isset ($_GET['id']))
{ 
	$date= date('Y/m/d');
	$id=$_GET['id'];
	$status=$_GET['status'];
	$sql="UPDATE requests SET Status='$status' where Req_no=$id";
	$result=mysqli_query($mysqli,$sql);
	if($status=='CV sent from partner')
	{
		$sql1="UPDATE requests SET rec_cv_date='$date' where Req_no=$id";
		$result1=mysqli_query($mysqli,$sql1);
		$sql2="UPDATE records SET rccd='$date' where id=$id";
		$result2=mysqli_query($mysqli,$sql2);
	}
	if($status=='Forwarded to partner')
	{	
		$sql1="UPDATE requests SET fwd_partner_date='$date' where Req_no=$id";
		$result1=mysqli_query($mysqli,$sql1);
		$sql2="UPDATE records SET frcd='$date' where id=$id";
		$result2=mysqli_query($mysqli,$sql2);
						echo'<form action="req_resc.php" class="w3-border-green" method="POST">
						<input type="email" placeholder="TO:-" name="to_mail" class="w3-input w3-border"/><br/>
						<input type="email" class="w3-input w3-border" name="from_mail" placeholder="FROM:-"/><br/>
						<input type="password" class="w3-input w3-border" name="pass" placeholder="Enter your password"/><br/>
						<input type="text" class="w3-input w3-border" name="sub" placeholder="Subject:"/><br/>
						<input type="textarea" class="w3-input w3-border" name="txt" placeholder="Compose email:"/>
						<br/><input class="w3-btn w3-green" type="submit" name="Send" value="Send">
					</form>';

	}
}
			if(isset($_POST['Send']))
			{
				$fr_m= $_POST['from_mail'];
				$to_m= $_POST['to_mail'];
				$sub= $_POST['sub'];
				$tx= $_POST['txt'];
				$ps= $_POST['pass'];
				require 'php_mailer/src/Exception.php';
				require 'php_mailer/src/PHPMailer.php';
				require 'php_mailer/src/SMTP.php';
				require_once("php_mailer\src\PHPMailer.php");
				$mail= new PHPMailer();
				$mail->isSMTP();
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = 'ssl';
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = '465';
				$mail->isHTML();
				$mail->Username = "$fr_m";
				$mail->Password = "$ps";
				$mail->SetFrom('no-reply@gmail.com');
				$mail->Subject = "$sub";
				$mail->Body = "$tx";
				$mail->AddAddress("$to_m");
				$mail->Send();
				
			}
?>

<br>
</body>
</head>