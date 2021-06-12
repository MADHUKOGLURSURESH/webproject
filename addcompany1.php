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
		
		
		$companyname = mysqli_real_escape_string($conn, $_POST["companyname"]);
		$companytype = mysqli_real_escape_string($conn, $_POST["companytype"]);
		$branch= mysqli_real_escape_string($conn, $_POST["branch"]);
		$qualification = mysqli_real_escape_string($conn, $_POST["qualification"]);
		$cutoff = mysqli_real_escape_string($conn, $_POST["cutoff"]);
		$package= mysqli_real_escape_string($conn, $_POST["package"]);
		

				$sql = "INSERT INTO company (cname,ctype,cbranch,qualification,cutoff,package)  VALUES ('$companyname','$companytype','$branch', '$qualification','$cutoff','$package')";
	
		
		$conn->query($sql) ;
		header("location: company.php");										
		$conn->close();
?>