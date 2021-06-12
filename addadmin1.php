<?php
session_start();
if(!      isset($_SESSION['name'])       )
{
header('Location: welcome.php');
}

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "placement";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		
		$username = mysqli_real_escape_string($conn, $_POST["username"]);

		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		

				$sql = "INSERT INTO admin (username,password)  VALUES ('$username', '$password')";
	
		
		$conn->query($sql) ;
		header("location: admin.php");
		echo"admin added!!";
		
		$conn->close();
?>