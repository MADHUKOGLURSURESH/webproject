<!DOCTYPE html>
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
    padding: 20px 140px;
    text-decoration: none;
}
a:hover:not(.active) {
    background-color: #4CAF50;
}

div.w3-content w3-section
{
	 
    margin-left: auto;
    margin-right: auto;
}


h2.w3-center
{
	text-align:center;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
	
}

.mySlides {display:none;}


</style>
</head>
<body bgcolor="white">
<p> </p>
<div>
<h1 align="center" style="color:#000033";>PLACEMENT MANAGEMENT</h1>
</div>

<ul>
  
 
  
  <li><a href="adminlogin.php">Admin Login</a></li>
  
  <li><a href="studentlogin.php">Student Login</a></li>
  
  
  <li><a href="register.php">Register if you are new</a></li>
  


</ul>



<div style="max-width:950px " class="center"> 
  <img class="mySlides" src="fpimg.jfif" style="width:100% "  vspace="30">
  <img class="mySlides" src="staff.jpg" style="width:100%" vspace="30">
  <img class="mySlides" src="office.jpg" style="width:100%" vspace="30">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>	

</body>

</html>