
<!DOCTYPE html>
<html lang="en">
 <head>
   <title>Yakal Residence Hall - Admin</title>
   
   <style>
	#welcome{
		text-align:right;
		width: 100%;
		float: right;
	}
	#tabs{
		width: 100%;
		text-align: right;
	}
	form {
		margin:0px;
		padding:0px;	
		display: inline;
	}
	hr{
		margin: 0px;
	}
	#main_pane{
		width: 100%;
		height: 100%;
		background-color: #222299;
	}
   
   </style>
 </head>
 <body>
   <div id='welcome'>
   Welcome, admin <?php echo $_SESSION['user']; ?>!
   <br>
   		<FORM METHOD="LINK" ACTION="logout" align='right'><INPUT TYPE="submit" VALUE="Logout"></FORM>
   </div>
   <hr>
		<div id='tabs'>
		<FORM METHOD="LINK" ACTION="aannouncements" align='right'><INPUT TYPE="submit" VALUE="Home"></FORM>
		<FORM METHOD="LINK" ACTION="aadmins" align='right'><INPUT TYPE="submit" VALUE="Admins"></FORM>
		<FORM METHOD="LINK" ACTION="adormers" align='right'><INPUT TYPE="submit" VALUE="Dormers"></FORM>
		<FORM METHOD="LINK" ACTION="aviolations" align='right'><INPUT TYPE="submit" VALUE="Violations"></FORM>
		<FORM METHOD="LINK" ACTION="aevents" align='right'><INPUT TYPE="submit" VALUE="Events"></FORM>
		</div>
		<hr>
		<div id='container'>
			Dormers
		<FORM METHOD="LINK" ACTION="adddormer" align='right'><INPUT TYPE="submit" VALUE="Add"></FORM>
		</div>
		<div id='container2'>
			EDIT DORMER<br>
			<?php $this->load->library('form_validation');?>
			
			<?php echo validation_errors(); ?>

			<?php echo form_open('home/editdormer2') ?>

			<?php
			$result=mysql_query("SELECT * FROM dormer WHERE student_number = " . ($_GET['student_number']). "") or die(mysql_error());
			
			$row = mysql_fetch_array($result);
			
			
			echo '<label for="username">Username</label>
			<input type="input" name="username"  value="'. $row['username'] .' " readonly /><br />
			
			<label for="password">Password</label>
			<input type="input" name="password"  value="" /><br />
			
			<label for="first_name">First Name</label>
			<input type="input" name="first_name"  value="'. $row['first_name'] .' " /><br />
			
			<label for="middle_name">Middle Name</label>
			<input type="input" name="middle_name"  value="'. $row['middle_name'] .' " /><br />
			
			<label for="last_name">Last Name</label>
			<input type="input" name="last_name"  value="'. $row['last_name'] .' " /><br />

			<label for="room">Room Number</label>
			<input type="input" name="room"  value="'.$row['room'] .' " /><br />
			
			
			<label for="student_number" style = "visibility: hidden;position: absolute;left: -100px; top:-100px">Old Student Number</label>
			<input type="input" name="orig_stud"  value="'.$row['student_number'] .' "  style = "visibility: hidden;position: absolute;left: -100px; top:-100px"/>
			
			<label for="student_number">Student Number</label>
			<input type="input" name="student_number"  value="'.$row['student_number'] .' " /><br />

			<label for="course">Degree Program</label>
			<input type="input" name="course"  value="'.$row['course'] .' " /><br />
			
			<label for="college">College</label>
			<input type="input" name="college"  value="'.$row['college'] .' " /><br />

			<label for="email">Email Address</label>
			<input type="input" name="email"  value="'.$row['email'] .' " /><br />

			<label for="phone_number">Contact Number</label>
			<input type="input" name="phone_number"  value="'.$row['username'] .' " /><br />

			<label for="birthday">Date of Birth</label>
			<input type="input" name="birthday"  value="'.$row['birthday'] .' " /><br />

			<label for="permanent_add">Permanent Address</label>
			<textarea name="permanent_add">'. $row['permanent_add']. '</textarea><br />
			
			
			<input type="submit" name="submit" value="Edit dormer" />
			';
			?>

		</div>
		
		
	<script>
	</script>
 </body>
</html>

