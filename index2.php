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
				.top-button 
				{
					margin: 0px 8px;
					padding: 20px 60px;
					border-radius: 100px;
					background: transparent;
					color: #fff;
					text-decoration: none !important;
					border: 2px solid #fff;
				}
				a.top-button:hover
				{
					background: #fff !important;
					color: #333 !important;
				}
				
		</style>
	</head>
	<body class="bck">
		<div class="w3-container">
			<center><h1 class="w3-card-4 w3-wide w3-white w3-text-indigo font2">ONLINE RESOURCE TRACKING SYSTEM</h1></center>
			<h1 class="w3-left w3-text-white w3-jumbo font1">WELCOME <?php echo("$ADMIN->name");?></h1>
			<a href="logout.php" class="w3-btn w3-round w3-red w3-xlarge w3-right">Logout</a>
			
		</div>
			</br></br></br></br></br><br/><br/><br/>
			<div class="w3-container w3-row">
			<center><a href="req_resc.php" class="w3-xlarge top-button">Requests Tracker</a></center>
			</div>
			</br></br></br></br></br>
			<div class="w3-container">
			<center><a href="http://www.gmail.com" class="w3-xlarge top-button">Send CV</a></center>
			</div>
		</div>
	</body>
</html>