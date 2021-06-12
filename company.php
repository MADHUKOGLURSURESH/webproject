
<html>
<head>
<style>

ul {
	
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
	background-color: #333;
    
}
li {
    float: left;
}

li a {
    display: block;
    color: white;
	font-size:25px;
    text-align: centre;
    padding: 20px 22px;
    text-decoration: none;
}
a:hover:not(.active) {
    background-color: #4CAF50;
}

h3 {
	background-color:#333;
	
}
h3 a
{
	color:white;
	text-decoration: none;
	 padding: 0px 30px;
}
	
.center {
    display: block;
	top:100px;
    margin-left: auto;
    margin-right: auto;
	
}



</style>
</head>
<body>
<h3><a href="logout.php"> Logout </a><a  href="adminhome.php">HomePage</a></h3>

<h1 align="center" style="color:#000033";>COMPANY DETAILS</h1>


<ul> <li><a href="addcompany.php">Add Company</a></li>
<li><a href="viewcompany.php">View Company</a></li>
 <li><a href="updatecompany.php">Update Company</a></li>

 <li><a href="deletecompany.php">Delete Company</a></li>
 <li><a href="addplacedstudents.php">Update PlacedStudents</a></li>

 <li><a href="viewplacedstudents.php">View PlacedStudents</a></li></ul>
 
 <img  src="a.jpg" width="1375" height="550"  border="0" class="center" vspace="10"/>

 
 

</body>
</html>