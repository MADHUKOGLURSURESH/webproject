<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "placement";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$user = mysqli_real_escape_string($conn, $_POST["usn"]);
		$pass = mysqli_real_escape_string($conn, $_POST["password"]);

		
		$sql="SELECT * FROM student WHERE usn='$user' and spassword='$pass' ";
		
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		if(mysqli_num_rows($result) == 1)
		{
				session_start();
				$_SESSION['name'] = $row["usn"]; // Initializing Session
				header("location: studenthome.php"); // Redirecting To Other Page
		}
		
		else
		{
				header("location: login_failed1.php");
		}
		

		$conn->close();
?>