
<!DOCTYPE html>
<html>
 <head>
   <title>Yakal Residence Hall - Admin</title>
 </head>
 <body>
   <h1>Home</h1>
   <h2>Welcome, admin <?php echo $username; ?>!</h2>
   <div id='container' style='width: 1700px; padding: 5px'>
		<div id='announcement' style='background-color: skyblue; width: 200px; height: 100px;'>
			<a href="home/aannouncements">Announcements</a>
			<br>
			<a href="home/adormers">Dormers</a>
			<br>
			<a href="home/aevents">Events</a>
			<br>
			
		</div>
   <a href="home/logout">Logout</a>
 </body>
</html>

