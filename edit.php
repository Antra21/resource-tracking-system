<?php

	if(isset($_GET['edit'])){
	$edit_id=$_GET['edit'];
$select="select * from records where id='$edit_id'";
$run=mysqli_query($mysqli,$select);
$row=mysqli_fetch_array($run);

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
?>
<br>
<form  class="w3-padding w3-margin w3-border w3-border-white" method="post" action="">
			<input type="text" name="u_name" class="w3-input w3-border w3-border-green" value="<?php echo $user_name;?>"/></br>
			<input type="text" name="u_skills" class="w3-input w3-border w3-border-green" value="<?php echo $user_skills;?>"/></br>
			<input type="text" name="u_intdate" class="w3-input w3-border w3-border-green" value="<?php echo $user_intdate;?>"/></br>
			<input type="text" name="u_interviewer" class="w3-input w3-border w3-border-green" value="<?php echo $user_interviewer;?>"/></br>
			Status<br/>
			<select name='u_status'>
				<option value='Hired'>Hired</option>
				<option value='Hired & on-board'>Hired & On-board</option>
				<option value='Rejected'>Rejected</option>
				<option value='Requested'>Requested</option>
			</select>
			<br/><br/>
			<input type="text" name="u_pname" class="w3-input w3-border w3-border-green" placeholder="enter project name"/></br>
			<input type="text" name="u_feedback" class="w3-input w3-border w3-border-green" placeholder="enter feedback"/></br>
			<input type="text" name="u_salary" class="w3-input w3-border w3-border-green" placeholder="enter salary"/></br>
			<input type="text" name="u_type" class="w3-input w3-border w3-border-green" placeholder="enter type"/></br>
			<input type="text" name="u_ifd" class="w3-input w3-border w3-border-green" placeholder="enter interview feedback date"/></br>
			<input type="text" name="u_rcpcd" class="w3-input w3-border w3-border-green" placeholder="enter request to commercial proposal recieved date"/></br>
			<input type="text" name="u_cpd" class="w3-input w3-border w3-border-green" placeholder="enter commercial proposal date"/></br>
			<input type="text" name="u_srd" class="w3-input w3-border w3-border-green" placeholder="enter sanction request date"/></br>
			<input type="text" name="u_od" class="w3-input w3-border w3-border-green" placeholder="enter overloading date"/></br>

			
			<input type="submit" name="update" value="update Data" class="w3-btn w3-border w3-large w3-border-green w3-green"/>
		</form>
<?php
		if(isset($_POST['update'])){
			 $update_name=$_POST['u_name'];
			 $update_status=$_POST['u_status'];
			 $update_pname=$_POST['u_pname'];
			 $update_skills=$_POST['u_skills'];
			 $update_intdate=$_POST['u_intdate'];
			 $update_interviewer=$_POST['u_interviewer'];
			 $update_feedback=$_POST['u_feedback'];
			 $update_salary=$_POST['u_salary'];
			 $update_type=$_POST['u_type'];
			 $update_ifd=$_POST['u_ifd'];
			 $update_rcpcd=$_POST['u_rcpcd'];
			 $update_cpd=$_POST['u_cpd'];
			 $update_srd=$_POST['u_srd'];
			 $update_od=$_POST['u_od'];
			 
			 $update="update records set name='$update_name',skills='$update_skills',intdate='$update_intdate',	
										interviewer='$update_interviewer', status='$update_status',pname='$update_pname',
										feedback='$update_feedback',salary='$update_salary',	
										type='$update_type',ifd='$update_ifd',rcpcd='$update_rcpcd',
										cpd='$update_cpd',srd='$update_srd',od='$update_od'
										where id='$edit_id'";
			 $update_run=mysqli_query($mysqli,$update);
			 $date= date('Y/m/d');
			 if($update_status=='Hired & on-board')
			 {
				$sql2="UPDATE records SET rctdate='$date' where id='$edit_id'";
				$result2=mysqli_query($mysqli,$sql2); 
			 }
			 if($update_run){
				echo "<script>window.location('res_track.php')</script>";
				}
		
		}
	}
?>