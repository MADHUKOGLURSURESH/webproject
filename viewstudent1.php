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
		
		$sql="SELECT * FROM student";
		
		$result=mysqli_query($conn,$sql);
		//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		
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

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
</head>
<body bgcolor="grey">

<ul>
  <li><a  href="studenthome.php">HomePage</a></li>
  <li><a class="active" href="viewstudent1.php">View student</a></li>
  <li><a href="logout.php"> Logout </a> </li>
</ul>


<div style="margin-left:15%;padding:40px 40px 40px 120px;color:black;font-size:20px;height:700px;">
  
		<?php
					if(mysqli_num_rows($result) == 0)
					{
							echo "No student added !!";
					}
					
					else
					{
							echo " <table >";
							echo "<tr> 
										<th> usn</th>
										<th> sname </th>
										<th> spassword </th>
										<th> sbranch </th>
										<th> year </th>
										<th> dob </th>
										<th> phone </th>
										<th> emailid </th>
										<th> sem1 </th>
										<th> sem2 </th>
										<th> sem3 </th>
										<th> sem4 </th>
										<th> sem5 </th>
										<th> sem6 </th>
										<th> cgpa </th>
										<th> percentage </th>
										
							";
							while($row = mysqli_fetch_array($result)) 
							{             
									echo "<tr>";
									echo "<td>" . $row['usn'] . "</td>" ;
									echo "<td>" . $row['sname'] . "</td>" ;
									echo "<td>" . $row['spassword'] . "</td>" ;
									echo "<td>" . $row['sbranch'] . "</td>" ;
									echo "<td>" . $row['year'] . "</td>" ;
									echo "<td>" . $row['dob'] . "</td>" ;
									echo "<td>" . $row['phone'] . "</td>" ;
									echo "<td>" . $row['emailid'] . "</td>" ;
									echo "<td>" . $row['sem1'] . "</td>" ;
									echo "<td>" . $row['sem2'] . "</td>" ;
									echo "<td>" . $row['sem3'] . "</td>" ;
									echo "<td>" . $row['sem4'] . "</td>" ;
									echo "<td>" . $row['sem5'] . "</td>" ;
									echo "<td>" . $row['sem6'] . "</td>" ;
									echo "<td>" . $row['cgpa'] . "</td>" ;
									echo "<td>" . $row['percentage'] . "</td>" ;
									echo "</tr>";
							} 
					}
		?>
		
		
</div>
		


</body>
</html>