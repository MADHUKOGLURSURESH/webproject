<?php
session_start();
if(!      isset($_SESSION['name'])       )
{
header('Location:ppakshwelcome.php');
}

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "placement";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		
		
		
?>


	
<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
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
   background-image: url("placements1.jpg");
   background-color: blue;
}


</style>
</head>
<body bgcolor="grey">

<ul>
  <li><a  href="studenthome.php">HomePage</a></li>
  
  <li><a href="logout.php"> Logout </a> </li>
</ul>



		

		<div style=" margin-left:55%;clear: both;">
					
				<form id="del"   action="updatestudent.php" method="POST" >
				</br></br></br>
				<h3> Add Student Details </h3>
				<h3> Enter USN </h3>
				

					usn:<br>
						<input type="text" name="usn"  required  /> 
						<br>
							
				

					<br>
<br>					
				sem1:<br>
						<input type="number" name="sem1" step="0.01" required /> 
						<br>
						

						sem2:<br>
						<input type="number" name="sem2" step="0.01"  required  /> 
						<br>
						sem3:<br>
						<input type="number" name="sem3"  step="0.01" required /> 
						<br>
						sem4:<br>
						<input type="number" name="sem4"  step="0.01" required /> 
						<br>
						sem5:<br>
						<input type="number" name="sem5" step="0.01"  required /> 
						<br>
						sem6:<br>
						<input type="number" name="sem6" step="0.01"  required /> 
						<br>
						<!---cgpa:<br>
						<input type="number" name="cgpa"  step="0.01" required /> 
						<br>
						percentage:<br>
						<input type="number" name="percentage" step="0.01"  required /> 
						<br>--->
						
						<br/> 
						<br />
						<br />
						
						
					
				<input type="submit" value="submit" />
			
			</form>
			
		</div>



</body>
</html>