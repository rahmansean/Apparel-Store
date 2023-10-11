<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>
<?php 
		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "apparelstore"; 
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if (!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 
		else 
		{ 
			//echo "Connection Established.";
		} 
	?>
</body>
</html>