<?php
session_start();
if(!      isset($_SESSION['name'])       )
{
header('Location: ppakshwelcome.php');
}
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "placement";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$sem1 = mysqli_real_escape_string($conn, $_POST["sem1"]);
		$sem2 = mysqli_real_escape_string($conn, $_POST["sem2"]);
		$sem3 = mysqli_real_escape_string($conn, $_POST["sem3"]);
		
		$sem4= mysqli_real_escape_string($conn, $_POST["sem4"]);
		$sem5 = mysqli_real_escape_string($conn, $_POST["sem5"]);
		$sem6 = mysqli_real_escape_string($conn, $_POST["sem6"]);
		//$cgpa = mysqli_real_escape_string($conn, $_POST["cgpa"]);
		//$percentage = mysqli_real_escape_string($conn, $_POST["percentage"]);
		$usn = mysqli_real_escape_string($conn, $_POST["usn"]);
		
		
		$cgpa= (($sem1+$sem2+$sem3+$sem4+$sem5+$sem6)/6);
		
	
		
		$percentage=($cgpa-0.75)*10;
?>
<html>
<head>
<style>
body {
    margin: 0;
}
table {
    border-collapse: collapse;
	width:200px;
	padding:10px;
   
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 20%;
    background-color: black;
    position: fixed;
    height: 100%;
    overflow: auto;
}
li a {
    display: block;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
}
li a.active {
    background-color: black;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
body {
  
   background-color: white;
}

</style>
</head>
<body>
<ul>
  <li><a  href="studenthome.php">HomePage</a></li>
  
  <li><a href="logout.php"> Logout </a> </li>
</ul>
<div style="margin-left:19%;padding:40px 40px 40px 120px;font-size:20px;color:black;height:700px;">

<?php	
		echo "<h1>marks entered</h1>";
		echo " <table border=1,border-collapse=collapse >";
	
		echo "<tr>
		<th> sem</th><th>cgpa</th>";
		
		echo "<tr>";
		
		echo "<td> sem1</td>" ;
		echo "<td>" . $sem1 . "</td>" ;
		
		echo "<tr>";
		echo "<td> sem2</td>" ;
		echo "<td>" . $sem2 . "</td>" ;
		
		echo "<tr>";
		echo "<td> sem3</td>" ;
		echo "<td>" . $sem3 . "</td>" ;
		
		echo "<tr>";
		echo "<td> sem4</td>" ;
		echo "<td>" . $sem4 . "</td>" ;
		
		echo "<tr>";
		echo "<td> sem5</td>" ;
		echo "<td>" . $sem5 . "</td>" ;
		
		echo "<tr>";
		echo "<td> sem6</td>" ;
		echo "<td>" . $sem6 . "</td>" ;
		echo "</tr>";
		echo "</table>";
		
	 echo "<br>";
		echo " <br>"    ;
		echo "your cgpa is ";
		echo $cgpa
		;
		echo "<br>";
		echo " <br>"    ;
		
			echo "your percentage is ";
	    echo $percentage
		   
			;
		
		if(!empty($sem1))

		{
			$sql = "UPDATE student SET sem1='$sem1' WHERE usn='$usn' ";
			$conn->query($sql) ;
		}
		
		
		if(!empty($sem2))
		{
			$sql = "UPDATE student SET sem2='$sem2' WHERE usn='$usn' ";
			$conn->query($sql) ;
		}
		
		if(!empty($sem3))
		{
			$sql = "UPDATE student SET sem3='$sem3' WHERE usn='$usn' ";
			$conn->query($sql) ;
		}
		if(!empty($sem4))
		{
			$sql = "UPDATE student SET sem4='$sem4' WHERE usn='$usn' ";
			$conn->query($sql) ;
		}
		if(!empty($sem5))
		{
			$sql = "UPDATE student SET sem5='$sem5' WHERE usn='$usn' ";
			$conn->query($sql) ;
		}
		if(!empty($sem6))
		{
			$sql = "UPDATE student SET sem6='$sem6' WHERE usn='$usn' ";
			$conn->query($sql) ;
		}
		if(!empty($cgpa))
		{
			$sql = "UPDATE student SET cgpa='$cgpa' WHERE usn='$usn' ";
			$conn->query($sql) ;
		}
		if(!empty($percentage))
		{
			$sql = "UPDATE student SET percentage='$percentage' WHERE usn='$usn' ";
			$conn->query($sql) ;
		}
		
		
	
		
		//header("location: studenthome.php");
		$conn->close();
		
?>
</div>
</body>
</html>