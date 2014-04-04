
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
   Welcome, dormer <?php echo $_SESSION['user']; ?>!
   <br>
   		<FORM METHOD="LINK" ACTION="logout" align='right'><INPUT TYPE="submit" VALUE="Logout"></FORM>
   </div>
   <hr>
		<div id='tabs'>
		<FORM METHOD="LINK" ACTION="dannouncements" align='right'><INPUT TYPE="submit" VALUE="Announcements"></FORM>
		<FORM METHOD="LINK" ACTION="dviewprofile" align='right'><INPUT TYPE="submit" VALUE="View Profile"></FORM>
		<FORM METHOD="LINK" ACTION="devents" align='right'><INPUT TYPE="submit" VALUE="Events"></FORM>
		<FORM METHOD="LINK" ACTION="dviolations" align='right'><INPUT TYPE="submit" VALUE="My Current Violations"></FORM>
		</div>
		<hr>
		<div id='container'>
			View Profile
		</div>
		
		<?php
			$result=mysql_query("SELECT * FROM dormer WHERE username = '". $_SESSION['user'] ."' ") or die(mysql_error());

			while($row = mysql_fetch_array($result))
			  {
			  echo "First name: " . $row['first_name'] . "<br> Middle name: " . $row['middle_name']. "<br> Last Name: " . $row['last_name'] . "<br> Student number: " . $row['student_number']. "<br> Room: " . $row['room'] . "<br> Course: " . $row['course']."<br> College: " . $row['college']. "<br> Email: " . $row['email']. "<br> Phone number(s): " . $row['phone_number']. "<br> Birthday: " . $row['birthday'];
			  echo "<br>";																																																																					
			  }
		?>
		
		
		
	<script>
	</script>
 </body>
</html>

