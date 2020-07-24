<?php
	session_start();
	$con=mysqli_connect("sql12.freemysqlhosting.net","sql12356786","2jYxUWS41A","sql12356786");
	if(isset($_POST["adminEmail"]))
	{
		$id=$_POST["adminEmail"];
		$pass=$_POST["adminPassword"];
		$role=$_POST["role"];
		$query="Select * from employee where email='$id'";
		$res=mysqli_query($con,$query);
		if(mysqli_num_rows($res)==0)
		{
			echo("<div class='w3-red'>Invalid Email</div>");
		}
		else
		{
			$row=mysqli_fetch_object($res);
			if($row->password == $pass)
			{
				$_SESSION["login_status"]="true";
				$_SESSION["login_admin_id"]=$row->email;
				$_SESSION["login_role"]=$role;
				if($role=="proj_man")
				{
					header("location:/index.php");
					exit();
				}
				else if($role=="dev_team")
				{
					header("location:/index1.php");
					exit();
				}
				else
				{
					header("location:/index2.php");
					exit();
				}
			}
			else
				echo("<div class='w3-red'>Incorrect Password</div>");
		}
	}
?>
<html>
	<head>
		<style>
			.bck{
					background: linear-gradient(to bottom, #666699 0%, #ffffff 100%);
				}
		</style>
	</head>
	<?php
			require("links.php");
	?>
	<body class="bck">
	<br><br>
	<div class="w3-container">
			<center><h1 class="w3-card-4 w3-wide w3-white w3-text-indigo font2">ONLINE RESOURCE TRACKING SYSTEM</h1></center>
	</div>
	<div class="w3-display-container" style="height:80%">
	<form action="login.php" class="w3-padding w3-display-middle w3-border w3-white w3-card-4 w3-border-blue" style="width:600px" method="POST">
		<h1 class="w3-blue">Login</h1><br/>
		<input type="radio" name="role" value="proj_man">Project Manager &nbsp &nbsp
		<input type="radio" name="role" value="dev_team">Developer Team &nbsp &nbsp
		<input type="radio" name="role" value="comp">Company
		<br><br>
		<input type="text" class="w3-input w3-border" placeholder="Enter Email" name="adminEmail"/><br/>
		<input type="password" class="w3-input w3-border" placeholder="Enter Password" name="adminPassword"/><br/>
		<button type="submit" class="w3-btn w3-red">
			LOGIN
		</button>
	</form>
	</div>
	</body>
</html>