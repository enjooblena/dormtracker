
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
   		<FORM METHOD="LINK" ACTION="home/settings" align='right'><INPUT TYPE="submit" VALUE="Settings"></FORM>
		<FORM METHOD="LINK" ACTION="home/logout" align='right'><INPUT TYPE="submit" VALUE="Logout"></FORM>
   </div>
   <hr>
		<div id='tabs'>
		<FORM METHOD="LINK" ACTION="home/aannouncements" align='right'><INPUT TYPE="submit" VALUE="Home"></FORM>
		<FORM METHOD="LINK" ACTION="home/aadmins" align='right'><INPUT TYPE="submit" VALUE="Admins"></FORM>
		<FORM METHOD="LINK" ACTION="home/adormers" align='right'><INPUT TYPE="submit" VALUE="Dormers"></FORM>
		<FORM METHOD="LINK" ACTION="home/aviolations" align='right'><INPUT TYPE="submit" VALUE="Violations"></FORM>
		<FORM METHOD="LINK" ACTION="home/aevents" align='right'><INPUT TYPE="submit" VALUE="Events"></FORM>
		</div>
		<hr>
		<div id='container'>
			Violations
		<FORM METHOD="LINK" ACTION="addviolation" align='right'><INPUT TYPE="submit" VALUE="Add"></FORM>
		</div>
		<div id='container2'>
			ADD VIOLATION<br>
			<?php $this->load->library('form_validation');?>
			
			<?php echo validation_errors(); ?>

			<?php echo form_open('home/createviolation') ?>

			<label for="name">Name</label>
			<input type="input" name="name" /><br />			

			<label for="details">Details</label>
			<input type="input" name="details" /><br />	
			
			<label for="vdate">Date</label>
			<input type="input" name="vdate" /><br />

			<label for="violator">Violator</label>
			<input type="input" name="violator" /><br />

			<input type="submit" name="submit" value="Create violation" />
			

		</div>
		
		
	<script>
	</script>
 </body>
</html>
