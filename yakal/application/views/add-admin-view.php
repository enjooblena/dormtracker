
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
			Admins
		<FORM METHOD="LINK" ACTION="addadmin" align='right'><INPUT TYPE="submit" VALUE="Add"></FORM>
		</div>
		<div id='container2'>
			ADD ADMIN<br>
			<?php $this->load->library('form_validation');?>
			
			<?php echo validation_errors(); ?>

			<?php echo form_open('home/create_admin') ?>

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

			<label for="position">Position</label>
			<input type="input" name="position" /><br />
			
			<label for="contact_number">Contact Number</label>
			<input type="input" name="contact_number" /><br />

			<input type="submit" name="submit" value="Create admin" />
			

		</div>
		
		
	<script>
	</script>
 </body>
</html>

