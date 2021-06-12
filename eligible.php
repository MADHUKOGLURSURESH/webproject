<html>
<head>
<style>
h1{
	color:black;
	margin-left:540px;
	;
	
}
h2{
	margin-left:600px;
}
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
}

</style>
</head>
<body>
<ul>
  <li><a  href="adminhome.php">HomePage</a></li>
  <li><a class="active" href="viewcompany.php">View company</a></li>
  <li><a href="logout.php"> Logout </a> </li>
</ul>
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
		
		
		$usn=$_SESSION['name'];
		
		$c="select *from student where usn='$usn' ";
		
		$result=mysqli_query($conn,$c);
		
		$criteria=0;
		
		while($row = mysqli_fetch_array($result))
		{
			$criteria=$row['percentage'];
		}			
		
		
		$sql="select cname from company where cutoff <= '$criteria' ";
		
		$r=mysqli_query($conn,$sql);
		
		
		echo "</br>"."</br>";
	
		if(mysqli_num_rows($r) == 0)
					{
							echo "<h1>Oops!! You don't have the required eligible marks</h1>";
					}
		
		else
					{
						echo "<h1 >Company/Companies you are eligible for:<h1>";
		while($ro = mysqli_fetch_array($r))
		{
			
					
			echo "";
			
			echo "<h2>".$ro[0]."</h2>";
					}
		}			
		
		
		
		
		
		
		
?>
   </body>
</html>   
	 
	 
