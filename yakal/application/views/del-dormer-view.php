
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
			Dormers
		<FORM METHOD="LINK" ACTION="adddormer" align='right'><INPUT TYPE="submit" VALUE="Add"></FORM>
		</div>
		
		<?php
			$result=mysql_query("DELETE FROM account WHERE username = '" . ($_GET['username']). "'") or die(mysql_error());
			
			$result=mysql_query("SELECT * FROM dormer") or die(mysql_error());

			while($row = mysql_fetch_array($result))
			  {
			  echo $row['last_name'] . " " . $row['first_name']. " " . $row['middle_name'] . "    ";
			  echo "<a href = 'editdormer?student_number=" . $row['student_number']. "'>Edit Dormer</a>   ";
			  echo "<a href = 'deletedormer?username=" . $row['username']. "'>Delete Dormer</a>";
			  echo "<br>";
			  }
		?>
		
		
		
	<script>
	</script>
 </body>
</html>

