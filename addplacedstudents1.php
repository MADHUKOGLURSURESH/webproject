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
		
		
		$usn = mysqli_real_escape_string($conn, $_POST["usn"]);
		$cid = mysqli_real_escape_string($conn, $_POST["cid"]);
		
		
		
		

				$sql = "INSERT INTO placed(usn,cid)  VALUES ('$usn','$cid')";
	
		
		$conn->query($sql) ;
		header("location: viewplacedstudents.php");
		$conn->close();
?>