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
<body bgcolor="grey">

<ul>
  <li><a  href="adminhome.php">HomePage</a></li>
  
  <li><a href="logout.php"> Logout </a> </li>
</ul>



		
		<div style=" margin-left:45%;clear: both;">
					
				<form id="del"   action="updatecompany1.php" method="POST" >
				<h3> update company details </h3>
				
				
				
					<p> CompanyID:</p>

				

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
				
				
				<p> CompanyName:</p>
				<input type="text" name="companyname"  required /> 
				<p> company type:</p>
				<input type="text" name="companytype"  required /> 
				<p> branch:</p>
				
				<input type="text" name="branch"  required /> 
				

				<p>qualification:</p>
				<input type="text" name="qualification"  required  /> 
				<p> cutoff:</p>
				<input type="number" name="cutoff" step="0.01" required /> 
				
				<p> package:</p>
				<input type="number" name="package"  step="0.01" required /> 
				<br />
				</br>
				<button> update </button> 
			
			</form>
		
						
				
						
						
					
				
			
			</form>
			
		</div>



</body>
</html>