<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "placement";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$usn = mysqli_real_escape_string($conn, $_POST["usn"]);
		$sname = mysqli_real_escape_string($conn, $_POST["name"]);
		$emailid = mysqli_real_escape_string($conn, $_POST["emailid"]);
		$spassword = mysqli_real_escape_string($conn, $_POST["password"]);
		$dob = mysqli_real_escape_string($conn, $_POST["dob"]);
		$branch= mysqli_real_escape_string($conn, $_POST["branch"]);
		$year= mysqli_real_escape_string($conn, $_POST["year"]);
		$phone= mysqli_real_escape_string($conn, $_POST["phone"]);

	
	$sql = "INSERT INTO student VALUES ('$usn','$sname','$spassword','$branch','$year','$dob','$phone','$emailid','0','0','0','0','0','0','0','0' )";

		if ($conn->query($sql) === TRUE) 
		{
				header("location: registration_success.php");
		} 
		else 
		{
				header("location: registration_fail.php");
		}

		$conn->close();
?>