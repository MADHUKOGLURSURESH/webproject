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
    padding: 20px 148px;
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
<form>

<h3><a href="logout.php"> Logout </a></h3>


<h1 align="center" style="color:#000033";>ADMIN HOME PAGE</h1>


<ul> <li><a href="admin.php">Admin Details</a></li>
 <li><a href="student.php">Student Details</a></li>
 <li><a href="company.php">Company Details</a></li></ul>

</form>

<img  src="ppcrop.jpg" width="1375" height="450"  border="0" class="center" vspace="10"/>

</body>
</html>