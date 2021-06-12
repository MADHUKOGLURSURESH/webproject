<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "placement";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$cid= mysqli_real_escape_string($conn, $_POST["cid"]);
		
		$sql = "DELETE FROM company WHERE cid=$cid";
		
		$conn->query($sql) ;
		header("location: viewcompany.php");
		//echo"$sql";
		$conn->close();
?>