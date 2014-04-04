
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
			Violations
		<FORM METHOD="LINK" ACTION="adddormer" align='right'><INPUT TYPE="submit" VALUE="Add"></FORM>
		</div>
		<div id='container2'>
			EDIT VIOLATIONS<br>
			<?php $this->load->library('form_validation');?>
			
			<?php echo validation_errors(); ?>

			<?php echo form_open('home/editviolation') ?>

			<?php
			$result=mysql_query("SELECT * FROM violations WHERE violator = '" . ($_GET['violator']). "'") or die(mysql_error());
			
			$row = mysql_fetch_array($result);
			
			
			echo '<label for="name">Name</label>
			<input type="input" name="name"  value="'. $row['name'] .' " /><br />
			
			<label for="details">Details</label>
			<input type="input" name="details"  value="'. $row['details'] .' " /><br />
			
			<label for="violator" style = "visibility: hidden;position: absolute;left: -100px; top:-100px">Old Violator</label>
			<input type="input" name="orig_violator"  value="'.$row['violator'] .' "  style = "visibility: hidden;position: absolute;left: -100px; top:-100px"/>
			
			<label for="vdate">Vdate</label>
			<input type="input" name="vdate"  value="'. $row['vdate'] .' " /><br />
			
			<label for="violator">Violator</label>
			<input type="input" name="violator"  value="'. $row['violator'] .' " /><br />

			<input type="submit" name="submit" value="Edit violation" />
			';
			?>

		</div>
		
		
	<script>
	</script>
 </body>
</html>

