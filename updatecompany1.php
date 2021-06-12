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
		$branch = mysqli_real_escape_string($conn, $_POST["branch"]);
		
		$qualification= mysqli_real_escape_string($conn, $_POST["qualification"]);
		$cutoff = mysqli_real_escape_string($conn, $_POST["cutoff"]);
		$package = mysqli_real_escape_string($conn, $_POST["package"]);
		$cid = mysqli_real_escape_string($conn, $_POST["cid"]);
		

		if(!empty($companyname))
		{
			$sql = "UPDATE company SET cname='$companyname' WHERE cid=$cid";
			$conn->query($sql) ;
		}
		
		if(!empty($companytype))
		{
			$sql = "UPDATE company SET ctype='$companytype' WHERE cid=$cid";
			$conn->query($sql) ;
		}
		
		if(!empty($branch))
		{
			$sql = "UPDATE company SET cbranch='$branch' WHERE cid=$cid";
			$conn->query($sql) ;
		}
		
		if(!empty($qualification))
		{
			$sql = "UPDATE company SET qualification='$qualification' WHERE cid=$cid";
			$conn->query($sql) ;
		}
		
		if(!empty($cutoff))
		{
			$sql = "UPDATE company SET cutoff='$cutoff' WHERE cid=$cid";
			$conn->query($sql) ;
		}
		
		if(!empty($package))
		{
			$sql = "UPDATE company SET package='$package' WHERE cid=$cid";
			$conn->query($sql) ;
		}
		
		
		
	
		
		header("location: viewcompany.php");
		$conn->close();
?>