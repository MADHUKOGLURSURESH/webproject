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
body {
	background-image: url("placements1.jpg");
	
   background-color: black;

}
</style>
</head>
<body bgcolor="white">

<ul>
  <li><a  href="adminhome.php">HomePage</a></li>
  
  <li><a href="logout.php"> Logout </a> </li>
</ul>



		

			
<div style="margin-left:34%;padding:40px 40px 40px 120px;font-size:20px;color:black;height:700px;">
					
				<form id="del"   action="addplacedstudents1.php" method="POST" >
				<h2> Add Placed Student Details </h2>
				
				
				
					<p> USN:</p>

				

										<?php 
							$sql1="SELECT usn FROM student";
							$result1=mysqli_query($conn,$sql1);
							if(mysqli_num_rows($result1) == 0)
							{
									echo "<select  style='width:150px; height:30px'>
									<option value=' '>No id available</option>
									</select>";
							}
							
							else
							{
									echo "<select  style='width:50px; height:30px'  name='usn'>";
									while($row = mysqli_fetch_array($result1))
									{
											echo "<option value= ' " . $row['usn'] . "' >  "  .  $row['usn']  . "</option>  ";
											
									}
									echo "</select>";
									
									
									
									
									
									
									
									
									
							}
					?>
					
										<p> Company Id:</p>

				

										<?php 
							$sql1="SELECT cid FROM company";
							$result1=mysqli_query($conn,$sql1);
							if(mysqli_num_rows($result1) == 0)
							{
									echo "<select  style='width:150px; height:30px'>
									<option value=' '>No id available</option>
									</select>";
							}
							
							else
							{
									echo "<select  style='width:50px; height:30px'  name='cid'>";
									while($row = mysqli_fetch_array($result1))
									{
											echo "<option value= ' " . $row['cid'] . "' >  "  .  $row['cid']  . "</option>  ";
											
									}
									echo "</select>";
									
							}
					?>
				
				
				

				
				
				
				
				</br></br><button> ADD </button> 
			
			</form>
		
						
						<br/> 
						<br />
						<br />
						
						
					
				
			
			</form>
			
		</div>



</body>
</html>