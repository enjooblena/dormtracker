
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
			ADD DORMER<br>
			<?php $this->load->library('form_validation');?>
			
			<?php echo validation_errors(); ?>

			<?php echo form_open('home/createdormer') ?>

			<label for="username">Username</label>
			<input type="input" name="username" /><br />			

			<label for="password">Password</label>
			<input type="input" name="password" /><br />
			
			<label for="first_name">First Name</label>
			<input type="input" name="first_name" /><br />

			<label for="middle_name">Middle Name</label>
			<input type="input" name="middle_name" /><br />
			
			<label for="last_name">Last Name</label>
			<input type="input" name="last_name" /><br />

			<label for="room">Room Number</label>
			<input type="input" name="room" /><br />
			
			<label for="student_number">Student Number</label>
			<input type="input" name="student_number" /><br />

			<label for="course">Degree Program</label>
			<input type="input" name="course" /><br />
			
			<label for="college">College</label>
			<input type="input" name="college" /><br />

			<label for="email">Email Address</label>
			<input type="input" name="email" /><br />

			<label for="phone_number">Contact Number</label>
			<input type="input" name="phone_number" /><br />

			<label for="birthday">Date of Birth</label>
			<input type="input" name="birthday" /><br />

			<label for="permanent_add">Permanent Address</label>
			<textarea name="permanent_add"></textarea><br />

			<input type="submit" name="submit" value="Create dormer" />
			

		</div>
		
		
	<script>
	</script>
 </body>
</html>

