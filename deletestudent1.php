<?php
/*
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "placement";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$usn= mysqli_real_escape_string($conn, $_POST["usn"]);
		
	
		
		$sql = "DELETE FROM student WHERE usn=$usn";
		
		$conn->query($sql) ;
		
		header("location: viewstudent.php");
		//echo"$sql";
		$conn->close();
?>*/


		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "placement";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$usn= mysqli_real_escape_string($conn, $_POST["usn"]);
		
		$sql = "DELETE FROM student WHERE usn=$usn";
		
		$conn->query($sql) ;
		header("location: viewstudent.php");
		//echo"$sql";
		$conn->close();
?>