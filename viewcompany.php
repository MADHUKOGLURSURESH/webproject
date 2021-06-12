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
		
		$sql="SELECT * FROM company";
		
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
body {

}

</style>
</head>
<body bgcolor="white">

<ul>
  <li><a  href="adminhome.php">HomePage</a></li>
  <li><a class="active" href="viewcompany.php">View company</a></li>
  <li><a href="logout.php"> Logout </a> </li>
</ul>


<div style="margin-left:12%;padding:40px 40px 40px 120px;font-size:20px;color:black;height:700px;">
  
		<?php
					if(mysqli_num_rows($result) == 0)
					{
							echo "No company added !!";
					}
					
					else
					{
							echo " <table >";
							echo "<tr> 
							<th> Company ID</th>
										<th> Company name</th>
										<th> Company type </th>
										<th> branch </th>
										<th> qualification </th>
										<th> cutoff</th>
										<th> package</th>
										
							";
							while($row = mysqli_fetch_array($result)) 
							{             
									echo "<tr>";
									echo "<td>" . $row['cid'] . "</td>" ;
									echo "<td>" . $row['cname'] . "</td>" ;
									echo "<td>" . $row['ctype'] . "</td>" ;
									echo "<td>" . $row['cbranch'] . "</td>" ;
									echo "<td>" . $row['qualification'] . "</td>" ;
									echo "<td>" . $row['cutoff'] . "</td>" ;
									echo "<td>" . $row['package'] . "</td>" ;
									
									echo "</tr>";
							} 
					}
		?>
		
		
</div>

</body>
</html>