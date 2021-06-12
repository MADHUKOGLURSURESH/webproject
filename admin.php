
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
    padding: 20px 279px;
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

<ul>

 <li><a href="addadmin.php">Add Admin</a></li>
 <li><a href="viewadmin.php">View Admin</a></li></ul>
<img  src="images.jpeg" width="1375" height="550"  border="0" class="center" vspace="10"/>
</body>
</html>