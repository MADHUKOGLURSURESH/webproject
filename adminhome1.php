<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "placement";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$user = mysqli_real_escape_string($conn, $_POST["username"]);
		$pass = mysqli_real_escape_string($conn, $_POST["password"]);

		
		$sql="SELECT * FROM admin WHERE username='$user' and password='$pass' ";
		
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		if(mysqli_num_rows($result) == 1)
		{
				session_start();
				$_SESSION['name'] = $row["username"]; // Initializing Session
				header("location: adminhome.php"); // Redirecting To Other Page
		}
		
		else
		{
				header("location: login_failed.php");
		}
		

		$conn->close();
?>