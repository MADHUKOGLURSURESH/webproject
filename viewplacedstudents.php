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
		
		$sql="SELECT * FROM placed";
		
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
<body bgcolor="white">

<ul>
  <li><a  href="adminhome.php">HomePage</a></li>
  
  <li><a href="logout.php"> Logout </a> </li>
</ul>


<div style="margin-left:25%;padding:40px 40px 40px 120px;font-size:20px;height:700px;">
  
		<?php
					if(mysqli_num_rows($result) == 0)
					{
							echo "No placed students added !!";
					}
					
					else
					{
							echo " <table >";
							echo "<tr> 
										<th> usn</th>

										<th> company name </th>
										
										<th>company id</th>
							
										
							";
							while($row = mysqli_fetch_array($result)) 
							{             
									echo "<tr>";
									echo "<td>" . $row['usn'] . "</td>" ;
									$us=$row['usn'];
									$u1=$row['cid'];
									
									$q1="select sname from student where usn='$us' ";
									$q2="select cname from company where cid='$u1' ";
									
									if(!mysqli_query($conn,$q1))
										 die("could".mysql_error);
									
									
									$row1=mysqli_fetch_array(mysqli_query($conn,$q1));
									//echo "<td>".$row1[0]." </td>";
									
									$row2=mysqli_fetch_array(mysqli_query($conn,$q2));
									echo "<td>".$row2[0]."</td>";
									echo "<td>" . $row['cid'] . "</td>" ;
									
									
									echo "</tr>";
							} 
					}
		?>
		
		
</div>
		

</body>
</html>